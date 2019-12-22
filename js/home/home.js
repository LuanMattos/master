var home = {
    Url: function (metodo, params) {
        return App.url("", "Home", metodo, params);
    }

};
var vm = new Vue({
    el: '#div-geral-time-line',
    data: {
        posts: [],
        loading: false
    },
    created() {
        this.getPosts()
    },
    methods: {
        getPosts() {
            for (var i = 0; i < 5; i++) {
                var count = this.posts.length + i
                this.posts.push({count})
            }
        },
        openfile:function(){
            $("#input-file-postagem").click();
        },
        postar:function(){
            var data = App.form_data("#input-file-postagem");
            var url = home.Url("add_time_line");

            var data = new FormData();
            data.append('fileimagem', $('#input-file-postagem')[0].files[0]);

            $.ajax({
                url: url,
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                }
            });

        }
    }
});

