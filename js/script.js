const app = new Vue({
  el: '#app',

  data:{

    arrDiscs:[],
    arrGenres:[],
    searchGenre: 'all',
    apiURL: 'http://localhost/dischi-php-ajax/api.php'

  },
  methods:{

    getAPI(){
      axios.get(this.apiURL,{
        params:{
          genre: this.searchGenre
        }
      })
      .then(res => {

        this.arrDiscs = res.data.arrDiscs;
        this.arrGenres = res.data.arrGenres;
        console.log(this.arrGenres);

      }).catch(err => {

        console.log(err);

      })
    }

  },
  created(){
    this.getAPI();
  }

});