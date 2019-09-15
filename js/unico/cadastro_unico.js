var cadastro_unico = {

    Url: function (metodo, params) {
        return App.url("unico", "cadastro_unico/Cadastro_unico", metodo, params);
    },

    Init: function () {
        var self = this;

        $.post(
            self.Url("index"),
            {},
            function (j) {
                App.modal({
                    url:self.Url("index"),
                    title: "Cadastro Único",
                    callback: function (content) {
                        var div = content.target;

                        var vue_instance = new Vue({
                            el: div,
                            data: {
                                data: j.data
                            },
                            methods: {
                               excluir:function(el,codigo){
                                   App.alerta("Deseja excluir o registro?",{
                                       "Sim":function(event){
                                           $.ajax(
                                               cadastro_unico.Url("excluir",codigo),
                                               {
                                                    // data:el
                                               },
                                               function(j){

                                               },'json')
                                           vue_instance.$delete(vue_instance.$root.data, el);
                                           $(this).dialog("close");
                                       },
                                       "Não":function(){
                                           $(this).dialog("close");
                                       }
                                   });


                               }

                            },


                        });

                        $(".novo").on("click", function () {
                            self.Form();
                        });
                        $(".buscar").on("click", function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            let value = div.find("#buscar").val();
                            self.Buscar(value);
                        })


                    }
                });


            }, 'json')


    },
    Form: function () {
        var self = this;

        App.modal({
            url: self.Url("salvar"),
            title: "Novo - Unificado",
            width: "950px",
            callback: function (div) {
                var Form = $("form-cadastro-unificado");
                Form.find("#btn-salvar").on("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    self.Salvar();
                })


            }
        });

    },
    Salvar: function () {
        var self = this;
        $.ajax(
            self.Url("acao_salvar"),
            {
                data: data
            },
            function (j) {

            }, 'json')
    },
    Buscar: function (value) {
        let self = this;
        $.post(
            self.Url("index"),
            {
                search: value
            },
            function (j) {
                console.log(j);

            }, 'json')

    }

}