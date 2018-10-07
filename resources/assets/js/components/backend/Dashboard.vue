<template>
    <div>

        <div class="columns">
            <div class="column is-8 is-offset-2">
                <section class="hero ">
                <div class="hero-body is-paddingless m-t-30 m-b-30">
                    <div class="container">
                    <h1 class="title">
                        <!--Welcome Back <span class="has-text-grey">Amir ur Rehman</span>-->
                        {{ welcome }}
                    </h1>
                    <h2 class="subtitle is-size-6">
                        <a href="" class="has-text-dark is-block m-b-5">
                            <i class="fa fa-envelope"></i>
                            You have <span class="has-text-weight-bold"> 3 </span> new messages    
                        </a> 
                    </h2>
                    </div>
                </div>
                </section>
            </div>
        </div>

        

        <div class="columns">
            <div class="column is-8 is-offset-2">
                <dash-menu></dash-menu>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    computed: {
        welcome() {
            return this.$store.getters.welcome
        }
    }

}
</script>

<style>

</style>
