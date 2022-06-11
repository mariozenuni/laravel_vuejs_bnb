<template>
    <div style="padding:1rem 1rem">
            <h6 class="text-uppercase text-secondary font-weight-bold pt-4" >Review List</h6>
            <div class=" border-bottom d-none d-md-block"  v-for="review in 3" :key="review" >
                <div class="row">
                    <div class="col-md-6">Mario Zenuni</div>
                     <div class="col-md-6 d-flex justify-content-end ">STAR RATING</div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-12">
                        Adedd 5 minutes ago
                    </div>
                </div>
                 <div class="row pt-4 pb-4">
                        <div class="col-md-12">Content of the review</div>
                    </div>
            </div>
    </div>
</template>
