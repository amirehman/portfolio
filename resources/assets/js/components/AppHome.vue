<template>
    <div>
         <router-link to="/me/login">Go to login</router-link>
    
        <router-view></router-view>
    </div>    
</template>

<script>

    import login from '../components/Auth/Login'

export default {
    components: {
        login
    }
}
</script>

<style>

</style>
