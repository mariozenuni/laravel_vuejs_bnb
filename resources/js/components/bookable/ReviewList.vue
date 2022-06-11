<template>
    <div style="padding:1rem 1rem">
            <h6 class="text-uppercase text-secondary font-weight-bold pt-4" >Review List</h6>
            <div v-if="loading">Loading....</div>
            <div v-else>
                  <div class=" border-bottom d-none d-md-block"  v-for="(review, index) in reviews" :key=index >
                <div class="row">
                    <div class="col-md-6">Mario Zenuni</div>
                     <div class="col-md-6 d-flex justify-content-end ">{{review.rating}}</div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-12">
                        {{review.created_at | dateFormat}}
                    </div>
                </div>
                 <div class="row pt-4 pb-4">
                        <div class="col-md-12">{{review.content}}</div>
                    </div>
            </div>
            </div>
          
    </div>
</template>

<script>

export default {
   props: {
       bookableId : String
   },
    //initialising the data method end defining the object's properties
    data(){
        return{
            loading : false,
            reviews : null,
            status : null,
            errors:null
            }
    },

  

 //fetching the data when the vue component has been created 
    created() {
        this.loading = true;
        axios.get(`/api/bookables/${this.bookableId}/reviews`)
        .then(response => {
            this.reviews = response.data.data,
            this.loading = false
        })
    }


}
</script>

