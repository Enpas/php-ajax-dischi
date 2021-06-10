const app = new Vue({
  el: '#app',

  data: {
    arrDiscs: [],
    arrGenres: [],
    arrYears: [],
    apiURL: 'http://localhost/php-ajax-dischi/api.php',
    selectGenre: 'all',
  },

  methods: {
    getAPI() {
      axios.get(this.apiURL, {
        params: {
          genre: this.selectGenre
        }
      })
      .then(res => {
        this.arrDiscs = res.data.discs;
        this.arrGenres = res.data.genres;
      })
      .catch(err => {
        console.log(err);
      })
    }
  },

  created() {
    this.getAPI();
  }

})