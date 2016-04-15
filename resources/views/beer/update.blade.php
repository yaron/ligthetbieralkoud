@extends('main')
    @section('content')
    <form method="POST" action="/update">
        {!! csrf_field() !!}
        <div>
            <label for="remember">Are you sure the beer is cold?</label>
            <input type="checkbox" name="remember"> Yes I am sure
        </div>

        <div>
            <button type="submit">Update beer status</button>
        </div>
    </form>
@endsection
