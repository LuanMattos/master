var un_unico = {

    Url: function (modulo, controller_parametro) {
        return window.origin + modulo + controller_parametro;

    },

    Render: function () {
        var self = this;

    },
    Init: function () {
        var self = this;

        App.modal({
            url:self.Url("/master/index.php/unico/", "cadastro_unico/Cadastro_unico/index"),
            title:"Cadastro Único",
            callback:function(j){
                var Form = $("#form-cadastro-unico-container");
                Form.find(".buscar").on("click",function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    let value = Form.find("#buscar").val();
                    self.Buscar(value);
                })


            }
        });
    },
    Buscar:function(value){
        let self = this;
        $.post(
            self.Url("/master/index.php/unico/", "cadastro_unico/Cadastro_unico/buscar"),
            {
                search:value
            },
            function(j){
                console.log(j);

            },'json')

    }

}