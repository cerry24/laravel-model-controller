<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel model controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container pt-5">
            <div class="row justify-content-around gy-5">
                @forelse ($movies as $movie)
                    <div class="col-5">
                        <article class="card p-3">
                            <h3 class="text-primary fw-bold text-uppercase">{{ $movie->title }}</h3>
                            <h4>{{ $movie->original_title }}</h4>
                            <p>Nationality: {{ $movie->nationality }}</p>
                            <p>Release date: {{ $movie->date }}</p>
                            <p>Rating: {{ $movie->vote }}/10</p>
                        </article>
                    </div>
                @empty
                    <p>0 movies found</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
