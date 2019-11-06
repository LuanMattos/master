<head>

    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= site_url("application/assets/js/libs/icons/fontawesome-free-5.10.2-web/css/all.css") ?>">
    <link href="<?= site_url("application/assets/css/tailwindcss.css") ?>" rel="stylesheet">

</head>


<body style="width: 100%;height: 100%" class="text-sm">
<div id="menu" class="fixed-top">
    <nav class="flex items-center justify-between flex-wrap bg-gray-700">
        <div class="flex items-center flex-shrink-0 text-white mr-6 ml-3">
            <span class="font-semibold text-xl tracking-tight">atos</span>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class=" lg:flex-grow p-2">
                <i class="fas fa-home text-2xl text-white cursor-pointer "></i>

            </div>
            <div class="float-right mr-6">

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
                        <a class="dropdown-item" href="#">Mostrar Mais</a>
                    </div>
                </div>

                <i class="fas fa-comments text-2xl text-white cursor-pointer ml-6" id="icone-msg"></i>
                <i class="fas fa-sort-down text-2xl text-white cursor-pointer ml-6" id="icone-opcoes"></i>
            </div>
            <div>

            </div>
        </div>
    </nav>
    <div class="float-right mt-1 py-2 w-64 bg-white rounded-lg shadow-xl hidden" id="opcoes-user">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Configurações</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Ajuda </a>
        <a href="<?= site_url("Logado/logout") ?>"
           class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Sair</a>
    </div>

    <div class="float-right mt-2 mr-4 py-2 w-1/3 bg-white rounded-lg shadow-xl hidden" id="nav-msg">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black"><p>Aqui uma msg</p></a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black">Mostrar Mais</a>
    </div>


</div>
<div id="corpo" style="width: 100%; height: 100%;">
    <div class="bg-gray-300 h-75 bg-no-repeat bg-cover  bg-center cursor-pointer"
         id="fundo-user"
         style="width: 100%;background-image: url('<?= "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTNIhqW7L1KvUWQP8fc1iwcnSG58reMjm8h668ovOuwm2nwTlUx" ?>');">
        <div class="ml-2 mt-12 fixed-top" >
            <div class="block w-1/6 h-64  rounded-tl-lg overflow-hidden border-2 border-gray-300 focus:outline-none focus:border-white" >
                <img class="h-full w-full object-cover "
                     src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80"
                     alt="Your avatar"

                >

            </div>
            <div class="w-1/6 h-8 bg-black hidden opacity-50 text-white border-2 border-gray-300 rounded-bl-lg  " >
                <div class="p-1">Clique para alterar</div>
            </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/home/home.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-3.4.1/jquery.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-1.12.4/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/vue.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/mascaras.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery.mask.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/icons/fontawesome-free-5.10.2-web/js/all.js"></script>
