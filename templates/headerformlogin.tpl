<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecStore</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="home">TecStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="home">Productos</a>
            </li>
            {if !isset($smarty.session.USER_EMAIL)}
                <li class="nav-item">
                <a class="nav-link" href="login">Login</a>     
                </li>
            {else}
                <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>     
                </li>
            {/if}
            {if isset($smarty.session.USER_EMAIL)}
            <li>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Añadir</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="formproduct">Producto</a></li>
                    <li><a class="dropdown-item" href="formcategory">Categoria</a></li>
                </ul>
            </li>
            {/if}
        </ul>
        </div>
    </div>
    </nav>