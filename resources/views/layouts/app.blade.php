<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body itemtype="https://schema.org/WebPage" class="min-h-screen flex flex-col">
    @include('layouts.header')
    <div class="main__content" itemtype="https://schema.org/CreativeWork">
        {!! $slot ?? '' !!}
    </div>
    @include('layouts.footer')
    <link href="{{ mix('js/app.js') }}" rel="stylesheet">
</body>

</html>