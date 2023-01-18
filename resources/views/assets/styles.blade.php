@foreach (config('asset.styles') as $style)
    <link rel="stylesheet" href="{{ url($style) }}">
@endforeach
