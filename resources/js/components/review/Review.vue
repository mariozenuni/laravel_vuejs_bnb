<template>
    <div>
          <div class="form-group">
                <label class="text-muted">Select the star rating (1 is worst 5 is the best)</label>
                <star-rating  class="fa-3x" v-model="review.rating"></star-rating>
          </div>
          
          <div class="form-group">
                <label for="content" class="text-muted">Describe your experince with</label>
                <textarea name="content"  cols="30" rows="10" class="form-control"></textarea>
          </div>

          <button class="btn btn-lg btn-primary col-12 mt-2">Submit</button>
    </div>
</template>

<script>
export default {

    data(){
        return {
            review:{
                rating:5,
                content:null
            }
        }
    }
// methods:{
//    onRatingChange(rating){
//         console.log(rating);
//         }
//     }
    
}
</script>
