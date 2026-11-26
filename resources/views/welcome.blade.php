@extends('partials.layout')
@section('content')
    {{ $posts->links() }}
    <div class="grid grid-cols-4 gap-4">
        @foreach($posts as $post)
            @include('partials.post-card')
        @endforeach
    </div>
@endsection
