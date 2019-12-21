var index = {
    Url: function (metodo, params) {
        return App.url("", "Home", metodo, params);
    }
}

    var vue_instance = new Vue({
        el: "#login-register-index-container",
        data: {
            error: "",
            form: {
                email: "",
                senhacadastro: "",
                repsenha: "",
                datanasc: "",
                telcel: "",
                nome:"",
                sobrenome:"",
                telcodpais:"55"

            }
        }
    });

    var bg = $(".body-bg");

    bg.find(".login-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        vue_instance.form.telcel = $("input[name='telcel']").val();
        vue_instance.form.datanasc = $("input[name='datanasc']").val();
        $.post(
            index.Url("acao_cadastro"),
            {
                data: vue_instance.form,

            },
            function (j) {
                if(!j.info){
                    vue_instance.error = j.error;
                }
                if(j.info){
                    window.location.href = App.url("verification","Verification","index");
                }

            }, 'json');


    });





