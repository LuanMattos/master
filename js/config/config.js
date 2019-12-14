var config = {
    Url: function (metodo, params) {
       return App.url("account_settings/", "Account_settings", metodo, params);
    },
    MenuconfigClick: function (id) {
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



$(function () {
    $(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
        var value = $(this).data('value');
        // console.log($(this));
    });


    var vue_instance = new Vue({
        el: "#main-config-account-settings",
        data: {
            informacoes_pessoais: {
                data_cidade: ""
            }
        },
        methods: {
            get_cidade: function (event) {
                const id = $("#selec-pais option:selected").val();
                const url = config.Url("get_cidade");
                $.post(
                    url,
                    {
                        id:id
                    },
                    function(json){
                        console.log(json);
                        if(json){
                            vue_instance.informacoes_pessoais.data_cidade = json.data;
                        }

                    },'json')

            }

        }
    });
})