var un_unico = {

    Url: function (modulo, controller_parametro) {
        return window.origin + modulo + controller_parametro;

    },

    Render: function () {
        var self = this;

    },
    Init: function () {
        var self = this;
        $('.container').removeClass('d-none');

        // console.log(App.modal());
        // console.log(Contents());



        App.modal({
            url:self.Url("/master/index.php/unico/", "cadastro_unico/Cadastro_unico/index"),
            title:"Cadastro Único",
            callback:function(j){
                var html = JSON.stringify(j.html);
                var json = JSON.parse(html);

                div.html("<button id='confirmar'>Confirmar</button>");
                $("#confirmar").on("click",function(){
                    alert('fsf');
                })

            }


        });








    }
}