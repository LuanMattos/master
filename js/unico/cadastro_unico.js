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

        App.modal();
        // $('.conteudo-div').dialog({
        //     title: "Cadastro Único",
        //     width: 1000,
        //     height: 500,
        //     autoOpen: true,
        //     open: function (event, ui) {
        //         console.log(j.html);
        //         event.target.innerHTML = j.data;
        //
        //     }
        //
        // });

        $(document).ready(function () {
            $.ajax({
                url: self.Url("/master/index.php/unico/", "cadastro_unico/Cadastro_unico/index"),
                type: 'POST',
                dataType: "json",
                async: true,
                data: {
                    id: "AJAX ok"
                },
                success: function (j) {
                    console.log(j);


                },

            });
        });




    }
}