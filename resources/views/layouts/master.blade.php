<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Narrator and Transmitter Bios @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<html>
    <div class="container text-center">
        <h2>Narrator and Transmitter Bios @yield('title')</h2>   
    </div>
    <div class="form-group">
        &nbsp;
    </div>       
    <div class="container text-center">
        @yield('content')
    </div>
</body>
</html>