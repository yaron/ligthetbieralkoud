@extends('main')
@section('content')
    <form method="POST" action="/youtube/add">
        {!! csrf_field() !!}

        <div>
            Youtube id
            <input type="text" name="youtube_id" value="{{ old('youtube_id') }}">
        </div>

        <div>
            <button type="submit">Add</button>
        </div>
    </form>
@endsection
