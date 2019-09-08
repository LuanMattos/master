var un_unico = {

    Url: function (modulo, controller) {
        App.url(modulo,controller);

    },

    Render: function () {
        var self = this;

    },
    Init: function () {
        var self = this;

        App.modal({
        // /master/index.php/unico/Unico/index
            url:self.Url("unico/", "cadastro_unico/Cadastro_unico/index"),
            title:"Cadastro Único",
            callback:function(j){
                var Form = $("#form-cadastro-unico-container");
                Form.find(".buscar").click(function(e){
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
            self.Url("unico/", "cadastro_unico/Cadastro_unico/index"),
            {
                search:value
            },
            function(j){
                console.log(j);

            },'json')

    }

}