new Vue({
 el: '#app',
 data:{

   dischi:[],
   genres:[],
   select:'',
   filtered:[],
   badRequest: false,

 },

 methods:{
   fillByGenre:function(){
     this.dischi.forEach((element) => {
       if(!this.genres.includes(element.genre)){
         this.genres.push(element.genre);
       }
     });
   },

   selectByGenre:function(){

       const self = this;
       this.badRequest = false;
       axios.get('http://localhost/php-ajax-dischi/app/server.php', {
         params:{
           genre: this.select,
         },
       })
       .then(function(resp){
         self.dischi = resp.data;


       })
        .catch(function (error) {
          self.dischi = [];
          self.badRequest = true;
          console.log(error);
  })

     }
 },

 mounted(){
   const self = this;
   axios.get('http://localhost/php-ajax-dischi/app/server.php')
   .then(function(resp){
     self.dischi = resp.data;

   })
 }
});
Vue.config.devtools = true;
