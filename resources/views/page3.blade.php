<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Laravel</title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    
    <h1 class="text-center p-5">
        Hello Laravel from page 3
    </h1>

    <div class="container m-5">
        <a href="{{ route('welcome') }}">Go to Homepage</a>
    </div>

</body>
</html>