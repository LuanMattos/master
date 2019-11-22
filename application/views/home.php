<head>
    <script type="text/javascript"
            src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"
            src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript"
            src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet"
          href="<?= site_url("application/assets/js/libs/icons/fontawesome-free-5.10.2-web/css/all.css") ?>">
    <link href="<?= site_url("application/assets/css/tailwindcss.css") ?>" rel="stylesheet">

</head>
<body style="width: 100%;height: 100%" class="text-sm">
<div id="div-geral">
    <div id="menu" class="fixed-top">
        <nav class="flex items-center justify-between flex-wrap bg-gray-700">
            <div class="flex items-center flex-shrink-0 text-white mr-6 ml-3">
                <span class="font-semibold text-xl tracking-tight">atos</span>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class=" lg:flex-grow p-2">
                    <i class="fas fa-home text-2xl text-white cursor-pointer "></i>
                </div>
                <div class="float-left mr-6">

                    <div class="dropdown">
                        <button class="dropdown"
                                data-toggle="dropdown"
                                id="dropdownMenuButton"
                                aria-haspopup="true"
                                aria-expanded="false">
                            <i class="fas fa-comments text-2xl text-white cursor-pointer ml-6" id="icone-msg"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Aqui uma notificacao</a>
                            <a class="dropdown-item" href="<?= site_url("Home/logout") ?>">Mostrar Mais</a>
                        </div>
                    </div>
                </div>

                <div class="float-left mr-6">

                    <div class="dropdown">
                        <button class="dropdown"
                                data-toggle="dropdown"
                                id="dropdownMenuButton"
                                aria-haspopup="true"
                                aria-expanded="false">
                            <i class="fas fa-bell text-2xl text-white cursor-pointer ml-6 "></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Aqui uma notificacao</a>
                            <a class="dropdown-item" href="<?= site_url("Home/logout") ?>">Mostrar Mais</a>
                        </div>
                    </div>
                </div>
                <div class="float-left mr-6">

                    <div class="dropdown">
                        <button class="dropdown"
                                data-toggle="dropdown"
                                id="dropdownMenuButton"
                                aria-haspopup="true"
                                aria-expanded="false">
                            <i class="fas fa-sort-down text-2xl text-white cursor-pointer ml-6" id="icone-opcoes"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Aqui uma notificacao</a>
                            <a class="dropdown-item" href="<?= site_url("Home/logout") ?>">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="float-right mt-1 py-2 w-64 bg-white rounded-lg shadow-xl hidden" id="opcoes-user">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Configurações</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Ajuda </a>
            <a href="<?= site_url("Home/logout") ?>"
               class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Sair</a>
        </div>

        <div class="float-right mt-2 mr-4 py-2 w-1/3 bg-white rounded-lg shadow-xl hidden" id="nav-msg">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black"><p>Aqui uma msg</p></a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Mostrar Mais</a>
        </div>

    </div>


    <div class="mt-10 relative h-64 bg-gray-600  text-gray-900">
        <div class="imagem-hover">
            <img src="https://images.france.fr/zeaejvyq9bhj/3mFKZntgJGOoQAgu2CgimC/0e7ff35a734fd6107a31a211edd9b90b/paris-2017-home.jpg?w=1120&h=490&q=70&fl=progressive&fit=fill"
                 class="object-cover h-64 w-full ">
            <div class="tooltip-interno">
                <div class="p-2 cursor-pointer">
                    <h1 class="text-gray-200 text-center text-base">Editar foto de capa </h1>
                    <p class="text-center p-2">
                        <i class="fas fa-camera-retro text-gray-200 text-2xl "></i>
                    </p>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 bg-gray-800  text-gray-400 mb-3 ml-6">
            <div class="w-full imagem-hover ">
                <img class="h-56 w-48 object-cover block    rounded-br-lg overflow-hidden border-2 border-gray-300 focus:outline-none focus:border-white"
                     src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80"
                     alt="Your avatar"
                >
                <div class="tooltip-interno">
                    <div class="p-2 cursor-pointer" @click="editarf_perfil()">
                        <h1 class="text-gray-200 text-center text-base">Editar foto de perfil </h1>
                        <p class="text-center p-2">
                            <i class="fas fa-camera-retro text-gray-200 text-2xl "></i>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/vue.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-3.4.1/jquery.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-1.12.4/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/mascaras.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery.mask.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/icons/fontawesome-free-5.10.2-web/js/all.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/home/home.js"></script>
