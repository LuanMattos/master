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
                    url: self.Url("index"),
                    title: "Cadastro Único",
                    callback: function (content) {
                        var div = content.target;

                        var vue_instance = new Vue({
                            el: div,
                            data: {
                                data: j.data
                            },
                            methods: {
                                excluir: function (el, codigo) {
                                    App.alerta("Deseja excluir o registro?", {
                                        "Sim": function (event) {
                                            $.ajax(
                                                cadastro_unico.Url("excluir", codigo),
                                                {},
                                                function (j) {
                                                }, 'json')
                                            vue_instance.$delete(vue_instance.$root.data, el);
                                            $(this).dialog("close");
                                        },
                                        "Não": function () {
                                            $(this).dialog("close");
                                        }
                                    });
                                },
                                editar: function (codigo) {
                                    cadastro_unico.Form(codigo);
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
    Form: function (codigo) {
        var self = this;
        var title = "Novo registro"

        if (typeof codigo != "undefined" && codigo != "") {
            title = "Editando - registro";
            var editar = true;
        }

        $.post(
            self.Url("salvar", codigo),
            {},
            function (j) {
                App.modal({
                    url: self.Url("salvar", codigo),
                    title: title,
                    width: "950px",
                    callback: function (content) {
                        var modal = $(this);
                        var dialog = content;
                        var Form = $("#form-cadastro-unificado");
                        var div = content.target;


                        var vue_instance_form = new Vue({
                            el: div,
                            data: {
                                dados:{
                                    codigo:j.data.codigo,
                                    nome:j.data.nome || "",
                                    cpf:j.data.cpf || "",
                                    rg:j.data.rg || "",
                                    orgaoemissor:j.data.orgaoemissor || "",
                                    email:j.data.email || "",
                                }

                            },
                            methods: {
                                closemodal: function () {
                                    var self_modal = modal;
                                    self_modal.dialog("close");
                                }


                            }
                        });



                        $(".btn-salvar").click(function(event){
                            event.preventDefault();
                            event.stopPropagation();

                            self.Salvar(vue_instance_form);

                        });

                    }
                });

            }, 'json')


    },


    Salvar: function (vue_instance) {
        var self = this;
        var url = self.Url("acao_salvar");
        var data = vue_instance.dados;

        $.post(
            self.Url("acao_salvar"),
            {
                data: data
            },
            function (j) {
                if(j.info){
                    App.close_modal();
                }

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

            }, 'json')

    }

}