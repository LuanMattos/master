var index = {
    Url: function (metodo, params) {
        return App.url("", "Logado", metodo, params);
    }
}

$("#formulario-cadastro").hide();
$(function () {


    var vue_instance = new Vue({
        el: "#geral-div-container",
        data: {
            error: "",
            form: {
                email: "",
                senhacadastro: "",
                repsenha: "",
                datanasc: "",
                telcel: ""
            }
        }
    })

    var bg = $("#geral-div-container");

    bg.find("#pronto").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $.post(
            index.Url("cadastro"),
            {
                data: vue_instance.form
            },
            function (j) {
                console.log(j);
                vue_instance.error = j.error;
            }, 'json');


    });


    bg.find("#comecar").click(function () {

        bg.find("#formulario-cadastro").slideToggle();
        bg.find("#formulario-login").hide();
    });

    bg.find("#back").click(function () {
        bg.find("#formulario-cadastro").hide();
        bg.find("#formulario-login").slideToggle();
    });
})




