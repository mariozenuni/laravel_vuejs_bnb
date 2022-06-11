<template>
    <div>
        <!--v-bind:to or :to it is binding a defined object prorty to the attribute 'to={}'  -->
        <nav class="navbar bg-light border-bottom navbar-light">
            <router-link class="navbar-brand mr-auto" :to="{name:'home'}">LaravelVueBnB</router-link>
            <router-link class="btn nav-button" :to="{name:'second'}">Second</router-link>
        </nav>
        <div class="container mt-4 mb-4 pr-4 pl-4">
                <router-view></router-view>
        </div> 
    </div>
  
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>