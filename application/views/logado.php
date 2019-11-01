<head>
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= site_url("application/assets/js/libs/icons/fontawesome-free-5.10.2-web/css/all.css") ?>">
    <link href="<?= site_url("application/assets/css/tailwindcss.css") ?>" rel="stylesheet">

</head>
<body>



<nav class="z-0 flex items-center justify-between flex-wrap bg-gray-700">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/>
        </svg>
        <span class="font-semibold text-xl tracking-tight">atos</span>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow p-2">

                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 ">
                    <i class="fas fa-home text-2xl "></i>
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    <i class="fas fa-comments text-2xl"></i>
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
                    <i class="fas fa-bell text-2xl"></i>
                </a>
            </div>
            <a href="#" class="inline-block
                                text-sm
                                 px-3
                                  py-2
                                   leading-none
                                     text-black
                                      border-white
                                      bg-gray-700
                                       hover:border-transparent
                                         hover:bg-gray-700
                                           lg:mt-2
                                           lg:mb-2
                                           lg:mr-2
">

<!--<i class="fas fa-user-cog text-2xl hover:text-white dropdown-toggle" data-toggle="dropdown"></i>-->
                <div>
                    <button class="block h-8 w-8 rounded-full overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
                        <img class="h-full w-full object-cover"
                             src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80"
                             alt="Your avatar"
                             id="avatar-nav"
                        >
                    </button>

                </div>
            </a>
    </div>
</nav>
<div class="float-right mt-2 py-2 w-48 bg-white rounded-lg shadow-xl hidden" id="nav-user">
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Configurações</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Ajuda </a>
    <a href="<?= site_url("Logado/logout") ?>" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sair</a>
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
