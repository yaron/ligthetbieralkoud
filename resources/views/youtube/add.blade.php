<!-- resources/views/youtube/add.blade.php -->

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
