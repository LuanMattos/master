<head>
    <script type="text/javascript"
            src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"
            src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet"
          href="<?= site_url("application/assets/js/libs/icons/fontawesome-free-5.10.2-web/css/all.css") ?>">
    <link href="<?= site_url("application/assets/css/tailwindcss.css") ?>" rel="stylesheet">

</head>
<style>
    .bg {
        background-color: #3e3e3f;
        background-image: url(<?= URL_RAIZ() . 'application/assets/images/svg/graph-paper/texture.svg' ?>);
    }

</style>

<body class="bg">

<div class="row mt-32">
    <div class="col">
        <div class="w-full max-w-xs ">
            <form method="POST" class=" w-full max-w-sm " id="formulario-login"
                  action="<?= site_url('Logado/index') ?>">
                <div class="container p-4">
                    <p class="font-mono text-base text-gray-800 text-left text-white">
                        Conecte-se

                    </p>

                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4"
                               for="inline-full-name">
                        </label>
                    </div>
                    <div class="md:w-2/1">
                        <input class="bg-gray-200
                                    appearance-none
                                     border-2
                                      border-gray-200
                                        w-full
                                         py-2
                                          px-4
                                           text-gray-700
                                            leading-tight
                                             focus:outline-none
                                              focus:bg-white
                                               focus:border-gray-400
                                               xl:rounded-0
"
                               id="inline-full-name"
                               type="text"
                               placeholder="Login"
                        >
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">

                        </label>
                    </div>
                    <div class="md:w-2/1">
                        <input class="bg-gray-200
                                    appearance-none
                                     border-2
                                      border-gray-200
                                        w-full
                                         py-2
                                          px-4
                                           text-gray-700
                                            leading-tight
                                             focus:outline-none
                                              focus:bg-white
                                               focus:border-gray-400
                                               xl:rounded-0
"
                               id="inline-username"
                               type="password"
                               placeholder="Senha">
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3"></div>
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight cursor-pointer" type="checkbox">
                        <span class="text-sm">Manter conectado</span>
                    </label>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/1">
                        <button class="shadow bg-gray-300 hover:bg-gray-100 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 w-56 xl:rounded-0"
                                type="button">
                            Acessar
                        </button>
                    </div>
                </div>
                <br>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/1">
                        <button class="shadow bg-gray-300 hover:bg-gray-100 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 w-56 rounded-0"
                                type="button">
                            Começar
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="col">
        <div class="img-home">
            <img src="<?= URL_RAIZ() . 'application/assets/images/svg/home.svg' ?>" style="width: 450px">
        </div>
    </div>
    <p class="text-danger">
        <?php if (isset($error_senha)) {
            echo $error_senha;
        } else {
            echo " ";
        } ?>
    </p>

</body>
<script type="text/javascript"
        src="<?= URL_RAIZ() ?>application/assets/js/libs/icons/fontawesome-free-5.10.2-web/js/all.js"></script>

