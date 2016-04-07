@extends('main')
@section('content')
    <ul>
        @foreach ($youtubes as $youtube)
            <li><a href="https://www.youtube.com/watch?v={{ $youtube->youtube_id }}">{{ $youtube->youtube_id }}</a> - {{ $youtube->used }}</li>
        @endforeach
    </ul>
    <a href="{{ route('youtube.add') }}">Add new youtube</a>
@endsection
