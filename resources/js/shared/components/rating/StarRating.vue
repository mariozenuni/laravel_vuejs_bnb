<template>
    <div class="d-flex">
       <i class="fas fa-star" v-for="star in fullStar" :key="'full' + star" ></i> 
       <i class="fas fa-star-half-alt" v-if="halfStar"></i> 
       <i class="far fa-star" v-for="star in emptyStar" :key="'empty' + star" ></i> 
    </div>
</template>

<script>
export default {
    props: {
        rating: Number
    },
    computed:{
        halfStar(){
            return  Math.round((Math.floor(this.rating) - this.rating)*100) ;
        },
         fullStar(){
            return Math.round(this.rating);
        },
         emptyStar(){
            return 5 - Math.ceil(this.rating);
        }
    },
 
    // created() {
    //      const numbers = [0.9,2.2,4.3,4.4,4.5];

    //      numbers.forEach(n => {
             
    //          console.log(`round for ${n} is ${Math.round(n)}`);
    //          console.log(`floor for ${n} is ${Math.floor(n)}`);
    //          console.log(`ceil for ${n} is ${Math.ceil(n)}`);
    //       console.log('============================================');
         
    //      })
    // }
}
</script>
