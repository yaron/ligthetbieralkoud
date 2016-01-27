<html>
<head>
    <title>Ligt het bier al koud punt NL</title>
    <link rel="icon" type="image/png" href="https://www.ligthetbieralkoud.nl/beer.png"/>
</head>
<body>
<div class="content">

    <ul>
        @foreach ($youtubes as $youtube)
            <li><a href="https://www.youtube.com/watch?v={{ $youtube->youtube_id }}">{{ $youtube->youtube_id }}</a> - {{ $youtube->used ? 'Gebruikt' : 'Ongebruikt' }}</li>
        @endforeach
    </ul>
    {{ HTML::link('youtube/add', 'Add') }}
</div>
</body>
</html>
