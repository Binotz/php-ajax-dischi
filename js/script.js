var app = new Vue({
    el: '#root',
    data:{
        albums:[]
    },
    methods:{
        getAlbumsviaApi: function(){
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then((resp)=>{
                this.albums = resp.data; 
            })
        }
    },
    mounted(){
        this.getAlbumsviaApi();
    }
});
