var home = {
    Url: function (metodo, params) {
        return App.url("", "Home", metodo, params);
    }

};
var vm = new Vue({
    el: '#vue-instance-time-line',
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
        rola:function(){
            alert('dfasf');
        }
    }
});

var postar_home = new Vue({
    el:"#div-geraç-publicar-home",
    data:{

    },methods:{
        postar:function(){
            alert('dfasfasd');
        }
    }
})

