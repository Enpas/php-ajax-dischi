const app = new Vue({
  el: '#app',

  data: {
    arrDiscs: [],
  },

  mounted() {
    axios.get('http://localhost/php-ajax-dischi/api.php')
      .then(res => {
        this.arrDiscs = res.data;
      })
      .catch(err => {
        console.log(err);
      })
  }

})