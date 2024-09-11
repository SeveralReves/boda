<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel con Blade y Vue</title>
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Llamando al componente Blade -->
    @component('components.header')
    @endcomponent

    @component('components.ourHistory')
    @endcomponent

    @component('components.quote-and-date')
    @endcomponent

    @component('components.gallery')
    @endcomponent

    @component('components.gifts')
    @endcomponent

    @component('components.contact')
    @endcomponent

    @component('components.footer')
    @endcomponent


    @vite('resources/js/app.js')
</body>
</html>
