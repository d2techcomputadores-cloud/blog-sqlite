<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <title>BlogDoGrêmio</title>
</head>
<body>
    <header class="border-bottom lh-1 py-3">
        <div class="row">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">
                    <img width="220px" src="../img/gremio logo.svg">Inscrever-se
                </a> 
            </div>
    
            <div  class="col-4 text-center"> 
                <a class="blog-header-logo text-body-emphasis text-decoration-none"
                    href="#">BlogDoGrêmio</a> 
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center"> 
                <a class="link-secondary" href="#" aria-label="Search"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3"
                    role="img" viewBox="0 0 24 24">
                    <title>Search</title>
                    <circle cx="10.5" cy="10.5" r="7.5"></circle>
                    <path d="M21 21l-5.2-5.2"></path>
                </svg> 
                </a>
                <div>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Pesquisar</a>
                </div>

                <div style="padding: 10px;">
                <a class="btn btn-sm btn-outline-secondary" href="login.html">Logar</a>
                </div>
                

            </div>
        </div>
    </header>
    <div>
        <nav class="nav nav-underline justify-content-between"> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis active" href="#">Tudo </a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="../posts.php">Posts</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="../jogador.php">Jogadores</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="../contratacoes.php">Contratações</a> 
            <a style="color: white;" class="nav-item nav-link link-body-emphasis" href="../trofeus.php">Troféus</a> 
            <hr>
        </nav>
    </div>
    <hr>
    <img style="width: 100%; padding: 10px 0;" src="gif/gif-2000x380.gif">

    <main>

    <div class="row">
        <div class="col-10">

            <?php
            require("require/post.php");
            ?>

        </div>

        <div style="text-align: center;" class="col">

            <?php
            require("require/anuncio.html")
            ?>

        </div>

    </div>
    <hr>
        <?php
        require("require/card-socio.html");
        ?>
        


        <?php
        require("require/footer.html");
        ?>
        
    </main>
</body>
</html>

