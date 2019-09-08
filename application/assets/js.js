var App = {}

App.url = function(modulo , controller_parametro){
    console.log(window.location);
    // /master/index.php/unico/Unico/index
    // return "/master/index.php/" + window.origin + modulo + controller_parametro
},

App.modal = function(options){

    if(typeof(options.width) == "undefined"){
        options.width = 1000;
    }
    if(typeof(options.height) == "undefined"){
        options.height= 500;
    }

    var options = {
        url:options.url,
        title:options.title,
        width:options.width,
        height:options.height,
        callback:options.callback

    }

        $(document).ready( function () {

        $.ajax({
            url: options.url,
            type: 'POST',
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            async: true,
            data: {
                id: "AJAX ok"
            },
            success: function (j) {
                var div = $("<div id='app-modal-container-modal-dialog-jquery-ui-min'></div>").append(j.html);

                    $(div).dialog({
                        title: options.title,
                        width: options.width,
                        height: options.height,
                        autoOpen: true,
                        open:options.callback
                    });

            },

        });
    });


}