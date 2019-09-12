var un_unico = {

    Url: function (metodo,params) {
        return App.url("unico","cadastro_unico/Cadastro_unico",metodo,params);
    },

    Render: function () {
        var self = this;

        var Form = $("#form-cadastro-unico-container");
        Form.find(".buscar").on("click",function(e){
            e.preventDefault();
            e.stopPropagation();
            let value = Form.find("#buscar").val();
            self.Buscar(value);
        })

    },
    Init: function () {
        var self = this;


        App.modal({
            url:self.Url("index"),
            title:"Cadastro Único",
            callback:function(div){
                self.Render(div);

            }
        });
    },
    Buscar:function(value){
        let self = this;
        $.post(
            self.Url("index"),
            {
                search:value
            },
            function(j){
                console.log(j);

            },'json')

    }

}