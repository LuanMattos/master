$(document).ready(function () {


    $("#corpo").click(function(){
        if($("#opcoes-user").is(":visible")){
            $("#opcoes-user").slideUp();
        }
        if($("#nav-msg").is(":visible")){
            $("#nav-msg").slideUp();
        }
        if($("#nav-notificacao").is(":visible")){
            $("#nav-notificacao").slideUp();
        }
    });
    //msg
    $("#icone-msg").click(function(){
        $("#nav-msg").slideToggle();
        if($("#opcoes-user").is(":visible")){
            $("#opcoes-user").hide();
        }
        if($("#nav-notificacao").is(":visible")){
            $("#nav-notificacao").hide();
        }
    });
    //opcoes
    $("#icone-opcoes").click(function(){
        $("#opcoes-user").slideToggle();
        if($("#nav-msg").is(":visible")){
            $("#nav-msg").hide();
        }
        if($("#nav-notificacao").is(":visible")){
            $("#nav-notificacao").hide();
        }

    });
    //notificacoes
    $("#icone-notificacao").click(function(){
        $("#nav-notificacao").slideToggle();

        if($("#nav-msg").is(":visible")){
            $("#nav-msg").hide();
        }
        if($("#opcoes-user").is(":visible")){
            $("#opcoes-user").hide();
        }

    })



});

