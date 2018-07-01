<template>
    <div class="m-t-30">
        <router-view></router-view>
    </div>    
</template>

<script>

    import login from '../../components/Auth/Login'

export default {
    components: {
        login
    }
}
</script>

<style>

</style>
