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
        postar:function(){
            alert('dfasf');
        }
    }
});

