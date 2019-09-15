var App = {}

App.url = function (modulo, controller, methods, params) {

    if (typeof (params) !== 'undefined') {
        return window.origin + "/master" + "/" + modulo + "/" + controller + "/" + methods + "/" + params
    } else {
        return window.origin + "/master" + "/" + modulo + "/" + controller + "/" + methods
    }
},
    App.alerta = function (text, buttons) {
        var options = {
            title: "Confirmação",
            width: "400px",
            height: "80px",
            buttons: buttons || [
                {
                    text: "OK",
                    click: function () {
                        $(this).dialog("close");
                    }
                }
            ],

        }
        var div = $("<div id='app-modal-container-modal-dialog-jquery-ui-min'></div>").text(text);

        $(div).dialog({
            title: options.title,
            width: options.width,
            buttons: options.buttons,
            height: options.height,
            autoOpen: true,
            show: null,
            open: function () {
                $(this).css("height", options.height);
            }
        });

    },
    App.missing = function (text, buttons) {
        var options = {
            title: "Atenção",
            width: "400px",
            height: "80px",
            buttons: buttons || [
                {
                    text: "OK",
                    click: function () {
                        $(this).dialog("close");
                    }
                }
            ],

        }
        var div = $("<div id='app-modal-container-modal-dialog-jquery-ui-min'></div>").text(text);

        $(div).dialog({
            title: options.title,
            width: options.width,
            buttons: options.buttons,
            height: options.height,
            autoOpen: true,
            show: null,
            classes: {
                "ui-dialog-titlebar": "title-default-text-missing default-missing"
            },
            open: function () {
                $(this).css("height", options.height);
                $(this).css("font-style", "italic");
            }
        });

    },
    App.error = function (text, buttons) {
        var options = {
            title: "Erro!",
            width: "400px",
            height: "80px",
            buttons: buttons || [
                {
                    text: "Sair",
                    click: function () {
                        $(this).dialog("close");
                    }
                }
            ],

        }
        var div = $("<div  id='app-modal-container-modal-dialog-jquery-ui-min'></div>").text(text);

        $(div).dialog({
            title: options.title,
            width: options.width,
            buttons: options.buttons,
            height: options.height,
            classes: {
                "ui-dialog-titlebar": "title-default-text-danger default-danger text-white"
            },
            autoOpen: true,
            show: null,
            open: function () {
                $(this).css("height", options.height);
                $(this).css("color", "red");
            }
        });

    },

    App.modal = function (options) {

        if (typeof (options.width) == "undefined") {
            options.width = 1000;
        }
        if (typeof (options.height) == "undefined") {
            options.height = 500;
        }

        var options = {
            url: options.url,
            title: options.title,
            width: options.width,
            height: options.height,
            buttons: options.buttons,
            vue:options.vue,
            callback: options.callback

        }


            $(document).ready(function () {

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

                        var div = $("<div id='app-modal-container-modal-dialog-jquery-ui-min' style='color:black;!important;'></div>").append(j.html);

                        $(div).dialog({
                            title: options.title,
                            width: options.width,
                            height: options.height,
                            autoOpen: true,
                            buttons: [],
                            open: options.callback
                        });

                    },

                });
            });




    }