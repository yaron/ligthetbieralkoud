@extends('main')
@section('head')
    <meta name="abstract" content="Staat het bier koud? {{ $cold }}. Wie moet er halen? {{ $current_bringer->name }}."/>
    <meta name="description" content="Staat het bier koud? {{ $cold }}. Wie moet er halen? {{ $current_bringer->name }}."/>
@endsection
@section('content')
    <div class="content">
        <h2>Ligt het bier al koud?</h2>
        <p><strong>{{ $cold }}</strong></p>
        <h2>Wie moet er koud leggen?</h2>
        <em class="marquee">{{ $current_bringer->name }}</em>
        <h2>Hoe lang nog?</h2>
        <p><strong>{{ $time }}</strong></p>
    </div>
    <div class="history"><h2>Laatste koudmakers</h2>
        <ul>
            @foreach ($bringers as $bringer)
                <li>{{ $bringer->name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $youtube }}?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
@endsection
