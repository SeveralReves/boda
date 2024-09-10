<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel con Blade y Vue</title>
    @vite('resources/scss/app.scss')
</head>
<body>
    <!-- Llamando al componente Blade -->
    @component('components.header')
    @endcomponent

    @component('components.ourHistory')
    @endcomponent
    
    @component('components.gallery')
    @endcomponent

    <!-- Aquí montamos el componente Vue principal App.vue -->
    <div id="app"></div>

    @vite('resources/js/app.js')
</body>
</html>
