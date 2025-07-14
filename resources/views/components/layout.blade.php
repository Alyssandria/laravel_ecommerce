<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loremipsum | {{ $title ?? 'Home' }}</title>
</head>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
        <h1 x-data="{message : 'Hello World'}" ></h1>

    <div class="w-full  p-8 max-md:px-4">
        <x-navigation.navigation />

        <main class="main-container">
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>

</html>
