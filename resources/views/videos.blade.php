<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Characters</title>
    @vite('resources/js/app.js')

</head>
<body>
    @include('partials/header') 

    <main>
        <h1>YOU ARE ON VIDEOS PAGE :-)</h1>
    </main>

    @include('partials/footer')
    
</body>
</html>


<style lang="scss" scoped>
    main{
        height: 550px;
        padding: 2em;
    }

    h1{
        padding: 1.5em;
        color: black;
        font-size: 5rem;
    }
</style>