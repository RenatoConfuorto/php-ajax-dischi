const app = new Vue({
  el: '#root',
  data: {
    albums: [],
    genres: [''],
    filterKey: '',
  },
  methods: {
    getGenres(){
      this.albums.forEach(element => {
        if(!this.genres.includes(element.genre)){
          // console.log(element.genre);
          this.genres.push(element.genre);
        }
      });
      console.log(this.genres);
    },
    getAlbums(){
      axios
      .get('server.php', { params: {query : this.filterKey} })
      .then((resp) => {
        // console.log(resp);
        this.albums = resp.data;
        console.log(this.albums);
        this.getGenres();
      });
    },
    changeFilterKey(event){
      // console.log(event.target.value);
      this.filterKey = event.target.value;
      this.getAlbums();
    },
  },
  created(){
    this.getAlbums();

  }
});