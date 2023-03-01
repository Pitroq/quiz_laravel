<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="fw-semibold">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container-fluid h-100">
                <a class="navbar-brand fs-3">Template</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarItemsContainer">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse h-100" id="navbarItemsContainer">
                    <div class="navbar-nav ms-auto h-100">
                        <a class="nav-link fs-4 mx-3 h-100 active" href="./">Home</a>
                        <a class="nav-link fs-4 mx-3 h-100" href="/quiz">Quiz</a>
                        <a class="nav-link fs-4 mx-3 h-100" href="#">One question</a>
                        <a class="nav-link fs-4 mx-3 h-100" href="#">Ranking</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>
        <footer class="fw-semibold fs-5 p-4 text-center">
            Copyright 2023 Quiz, Inc
        </footer>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>