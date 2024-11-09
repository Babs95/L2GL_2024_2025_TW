<!DOCTYPE html>
<html>
<head>
    <title>Mon App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="/index.php">Mon App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo !empty($index) == '/index.php' ? 'active' : '' ?>" aria-current="page" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/views/authors/list.php' ? "active" : "" ?>" href="/views/authors/list.php">Auteurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php  echo$_SERVER['REQUEST_URI'] == '/views/books/list.php' ? "active" : "" ?>" href="/views/books/list.php">Livres</a>
            </li>
        </ul>
    </div>
</nav>

