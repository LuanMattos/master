var home = {
    Url: function (metodo, params) {
        return App.url("", "Home", metodo, params);
    },
    modal:function(){
        App.modal();
    }


}

    new Vue({
            el:"#div-geral",
            data:{
                testa:"dfdsf"
            },
            methods:{
                editarf_perfil:function(){
                    home.modal({
                        url:home.Url("get_galeria"),
                        title: "Galeria",
                        buttons: options.buttons,
                        vue:j.html,
                        // beforeclose:options.beforeclose,
                        callback: function(j){

                        }
                    });

                }
             }
    })
$(function(){

})
