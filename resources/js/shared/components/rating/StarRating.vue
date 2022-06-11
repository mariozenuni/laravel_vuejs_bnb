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
            return false;
        },
         fullStar(){
            return 4;
        },
         emptyStar(){
            return 1;
        }
    }
}
</script>
