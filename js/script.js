new Vue({
 el: '#app',
 data:{

   dischi:[],
   genres:[],
   select:'',
   filtered:[],

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
     axios.get('http://localhost/php-ajax-dischi/app/server.php?')
     .then(function(resp){
       self.dischi.filter((element)=>{
         return element.genre === self.select;

       })
     })
   }
 },

 mounted(){
   const self = this;
   axios.get('http://localhost/php-ajax-dischi/app/server.php)
   .then(function(resp){
     self.dischi = resp.data;
     console.log(self.dischi);

   })
 }
});
Vue.config.devtools = true;
