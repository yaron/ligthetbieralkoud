<html>
<head>
    <title>Ligt het bier al koud punt NL</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="https://www.ligthetbieralkoud.nl/beer.png"/>
    <meta name="abstract" content="Staat het bier koud? {{ $cold }}. Wie moet er halen? Jelle. Laatst bijgewerkt? vrijdag 15 januari"/>
    <meta name="description" content="Staat het bier koud? {{ $cold }}. Wie moet er halen? Jelle. Laatst bijgewerkt? vrijdag 15 januari"/>


</head>
<body>
<div class="overlay"></div>
<div class="container">
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
</div>
</body>
</html>
