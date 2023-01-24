<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $post_id)
    {
        $validated = $request->validate([
            'message' => ['required', 'min:10', 'max:100']
        ]);

        Comment::create([
            'content' => $validated['message'],
            'post_id' => $post_id
        ]);

        return redirect()->route('post', $post_id);
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'message' => ['required', 'min:10', 'max:100']
        ]);

        $comment = Comment::findOrFail($id);
        $comment->content = $validated['message'];
        $comment->save();

        return redirect()->route('post', $comment->post->id);
    }

    public function destroy($id)
    {
        Comment::destroy($id);

        return redirect()->back();
    }
}
