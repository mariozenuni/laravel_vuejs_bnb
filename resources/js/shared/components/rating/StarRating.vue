<template>
    <div class="d-flex">
       <i 
        class="fas fa-star" 
        v-for="star in fullStar" 
        :key="'full' + star" 
        @click="$emit('input',star)">
        </i> 
       <i 
       class="fas fa-star-half-alt" 
       v-if="halfStar"
        @click="$emit('input', halfStar)"
       >
       </i> 
       <i 
       class="far fa-star" 
       v-for="star in emptyStar" 
       :key="'empty' + star" 
       @click="$emit('input',fullStar + star)">
       </i> 
    </div>
</template>

<script>
export default {
    props: {
        value: Number
    },
    computed:{
        halfStar(){
           const franction = Math.round(
               (this.value - Math.floor(this.value))*100
               );
            return franction > 0 && franction < 50;
        },
         fullStar(){
            return Math.round(this.value);
        },
         emptyStar(){
            return 5 - Math.ceil(this.value);
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
