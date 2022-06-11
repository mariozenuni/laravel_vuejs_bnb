<template>
   
    <div>
       
    <div v-if=loading>
        Data Loading...
    </div>
        <div v-else>
        <div class="row mb-4" v-for="row in rows" :key=" 'row' + row">
                <div class="col d-flex align-items-stretch" 
                v-for="(bookable, column) in bookableInRow(row)" :key="row +row + column" >
                <BookableListItem v-bind="bookable"></BookableListItem>
        </div>
            <div class="col" v-for="p in placeholderInRow(row)" :key="p"></div> 
        </div>
      
        </div>
    
    </div>
</template>

<script>
import BookableListItem  from './BookableListItem';


//registering our BookableListItem component localy 
export default {
   components: {
     BookableListItem
   } ,
    // data is important to make the data components reactive. 
   data(){
       return {
           bookables:null,
           loading: false,
           columns:3
         
       };  
   }, 
   computed:{
       rows(){
           return this.bookables === null ? 0 :
            Math.ceil(this.bookables.length/this.columns);
       }
   },
    methods:{
        bookableInRow(row){
                return this.bookables.slice((row - 1)*this.columns,row*this.columns)
        },
        placeholderInRow(row){
                return this.columns - this.bookableInRow(row).length
        }
    },
   created(){
       console.log('created');
        this.loading=true; 
const request = axios
      .get('api/bookables')
      .then(response => {
          
    this.bookables = response.data.data
    this.loading = false;
       });
   }
};
</script>
