var home = {
    Url: function (metodo, params) {
        return App.url("", "Home", metodo, params);
    }

};

    new Vue({
            el:".dashboard-mp",
            data:{
                testa:"dfdsf"
            },
            methods:{
                editarf_perfil:function(){
                    $.post(

                        home.Url("get_galeria"),
                        {

                        },function(j) {
                            App.modal_galeria({
                                url: home.Url("get_galeria"),
                                title: "Galeria de fotos",
                                width: "600px",
                                height: "2000px",
                                vue: j.html,
                                callback: function () {

                                },
                            });
                        },'json');


                }
             }
    });

