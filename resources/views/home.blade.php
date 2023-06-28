<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comics</title>
        @vite('resources/js/app.js')
    </head>
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <body>
        @include('partials/header')
        <main>
            <div class="jumboImg">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">    
            </div>
            <div class="fumetti-PreContainer">
                <div class="fumetti-container">
                    <div class="CurrentSeries"> CURRENT SERIES </div>
                    @foreach ($fumetti as $fumetto)
                        <div class="card">
                            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" >
                            <div>{{ $fumetto ['title'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div>LOAD MORE</div>
            </div>
        </main>
        @include('partials/footer')
    </body>
</html>
