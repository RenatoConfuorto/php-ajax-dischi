const app = new Vue({
  el: '#root',
  data: {
    albums: [],
  },
  created(){
    axios
    .get('server.php')
    .then((resp) => {
      // console.log(resp);
      this.albums = resp.data;
      // console.log(this.albums);
    });
  }
});