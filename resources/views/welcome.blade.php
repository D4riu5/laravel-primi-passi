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
        Hello Laravel
    </h1>

    <div class="container m-5">
        <h2>
            Pages links:
        </h2>

        <div class="my-2 d-flex flex-column">
            <a href="{{ route('page2') }}">Go to page 2</a>
            <a href="{{ route('page3') }}">Go to page 3</a>
        </div>
    </div>

</body>
</html>