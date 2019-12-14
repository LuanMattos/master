var config  = {
    MenuconfigClick:function(id){
        $(".config-itens").slideUp();

        switch (id) {
            case 1:
                $("#div-geral-config-informacoes-pessoais-index").slideDown();
                break;
            case 2:
                $("#div-geral-config-perfil-index").slideDown();
                break;
            case 3:
                $("#div-geral-config-requisicoes-amizades").slideDown();
                break;
            case 4:
                $("#div-geral-config-redes-sociais").slideDown();
                break;
            case 5:
                $("#div-geral-config-email").slideDown();
                break;
            case 6:
                $("#div-geral-config-notificacoes").slideDown();
                break;
             case 7:
                $("#div-geral-mudar-senha").slideDown();
                break;
             case 8:
                $("#div-geral-desativar-conta").slideDown();
                break;

        }

    },

};
