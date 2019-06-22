var un_unico = {

    Init: function (div) {
        var full = $('div#full');
            $("#unico").dialog({
                title:"Cadastro Único",
                width:1000,
                height:500,
                autoOpen: true,
                show: {
                    effect: "scale",
                    duration: 200
                },
                classe:{
                    '.ui-dialog-titlebar':{
                        'background': 'transparent',
                        'border': 'none'
        }
                }


            });

    }
}