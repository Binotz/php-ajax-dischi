var app = new Vue({
    el: '#root',
    data:{
        albums:[],
        filteredAlbums:[],
        genres:['All'],
        genreSelected:'All',
        APILink: 'http://localhost:8888/php-ajax-dischi/api.php'
    },
    methods:{
        getAlbumsAndGenres: function(){
            this.getAlbumsviaApi();
            this.getGenreviaApi();
        },
        getAlbumsviaApi: function(){
            axios.get(this.APILink)
                .then((resp)=>{
                    this.albums = resp.data; 
                })
        },
        getGenreviaApi: function(){
            axios.get(this.APILink)
                .then(resp =>{
                    let albums = resp.data;
                    albums.forEach(album => {
                        //se il genere non è presente nella lista dei generi lo pusho
                        if(!this.genres.includes(album.genre)){
                            this.genres.push(album.genre);
                        }
                    });
                })
        },
        getFilteredAlbums: function(){
            axios.get(this.APILink + '?genre=' + this.genreSelected)
                .then((resp)=>{
                    this.albums = resp.data; 
                })
        }
    },
    mounted(){
        this.getAlbumsviaApi();
        this.getGenreviaApi();
    },
    computed:{
        getAlbums: function(){
            this.getAlbumsviaApi();
        },
        getGenres: function(){
            this.getGenreviaApi();
        }
    }
});
