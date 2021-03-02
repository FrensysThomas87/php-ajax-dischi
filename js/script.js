new Vue({
 el: '#app',
 data:{

   dischi:[],
 },

 mounted(){
   const self = this;
   axios.get('http://localhost/php-ajax-dischi/app/server.php')
   .then(function(resp){
     self.dischi = resp.data;
     console.log(self.dischi);

   })
 }
});
Vue.config.devtools = true;
