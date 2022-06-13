<template>
<div class="row">
        <div class="col-md-8 pb-4" >
            <div class="card">
                <div class="card-body" >
                     <div v-if="!loading">
                    <h2>{{bookable.title}}</h2>
                    <hr/>
                    <article>{{bookable.description}}</article>
                    </div>
                <div v-else>Loading...</div>
              </div>
            </div>
            <review-list :bookable-id="this.$route.params.id"></review-list>
        </div>
         <div class="col-md-4">
             <Availability :bookable-id="this.$route.params.id"></Availability>
        </div>
    </div>
</template>



<script>
import Availability from './Availability';
import ReviewList from './ReviewList';
export default {
    components:{
        Availability,
        ReviewList

    },  
    data(){
        return {
          bookable : null ,
          loading: false
        }
    },
    created(){
         this.loading=true;
        //console.log(this.$route.params.id);
        //template string `/api/bookables/${this.$route.params.id}`
    axios.get(`/api/bookables/${this.$route.params.id}`)
    .then(response => this.bookable = response.data.data )
    .then(()=> this.loading = false);
 
    }
}   
</script>
