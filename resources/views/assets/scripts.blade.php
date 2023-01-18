@foreach (config('asset.scripts') as $script)
    <script src="{{ url($script) }}"></script>
@endforeach
