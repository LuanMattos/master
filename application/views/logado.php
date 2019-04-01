
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.3.1/js/bootstrap.js">
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/jquery3.3/jquery.js" ></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <ul class="navbar navbar-expand-lg navbar-light bg-dark">
            <li class="nav-item active">
                <a class="navbar-brand text-white font-weight-bold" href="#">Único</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Arquivos</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-menu" href="#">Fotografias</a>


                </div>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="menu">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar por nome"
                       aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" id='search' type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>


    <script>


        $('#search').click(function(){

        });
    </script>