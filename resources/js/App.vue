<template>
    <router-view/>
</template>

<script>

import Home from "./views/Home.vue";

export default {
    name: 'App',
    components: {Home},
    computed: {
        getRouteName(){
            return this.$route.name;
        }
    }

};
</script>

<style lang="css">
a.router-link-active, router-link-exact-active{
    background: #673ab7 !important;
    color:#fff !important;
}
</style>
