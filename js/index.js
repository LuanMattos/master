var index = {
    Url: function (metodo, params) {
        return App.url("", "Logado", metodo, params);
    }
}

$(function(){

    var vue_instance = new Vue({
        el:"#geral-div-container",
        data:{
            error:""
        }
    })

    var bg = $("#geral-div-container");

    bg.find("#pronto").click(function(event){
        event.preventDefault();
        event.stopPropagation();

        $.post(
           index.Url("cadastro"),
            {},
            function(j){
               vue_instance.error = j.error;
            },'json');

    });

    bg.find("#formulario-cadastro").hide();

    bg.find("#comecar").click(function(){

        $("#formulario-cadastro").slideToggle();
        bg.find("#formulario-login").hide();
    });

    bg.find("#back").click(function(){
        bg.find("#formulario-cadastro").hide();
        $("#formulario-login").slideToggle();
    })


})

