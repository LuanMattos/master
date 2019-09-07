function Contents() {
    if (!Contents.instance) {
        Contents.instance = this;
    }

    return Contents.instance;
}



var App = {}

App.modal = function(options){// ui-dialog bg-transparent-modal ui-widget ui-widget-content ui-front ui-draggable

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

    $(document).ready(function () {
        $.ajax({
            url: options.url,
            type: 'POST',
            dataType: "json",
            async: true,
            data: {
                id: "AJAX ok"
            },
            success: function (j) {

                var div = $("<div id='app-modal' class='' style='color:white;font-family: verdana'></div>");

                $(div).dialog({
                    title: options.title,
                    width: options.width,
                    height: options.height,
                    autoOpen: true,
                    open:  function (div) {
                        console.log(j.data);
                        console.log(j.html);

                        $("div#app-modal.ui-dialog-content.ui-widget-content").append();

                        // options.callback = j;
                        // console.log(options.callback);

                    }

                });

            },

        });
    });


}