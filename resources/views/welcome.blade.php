<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mi Proyecto Laravel</title>
    <!-- Añade tu CSS personalizado aquí -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Bienvenido a Mi Proyecto Laravel</h1>
            <p class="lead">Esta es la página de inicio de tu nueva aplicación Laravel.</p>
            <hr class="my-4">
            <p>Comienza a desarrollar tu aplicación increíble ahora!</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Aprende más</a>
        </div>
    </div>

    <!-- Añade tu JavaScript personalizado aquí -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
