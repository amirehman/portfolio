<template>
    <div class="tile is-ancestor dashboard-menu">
        <div class="tile is-vertical is-8">
            <div class="tile">
            <div class="tile is-parent is-vertical">
                <article class="tile is-child notification is-white  box is-radiusless">
                <p class="title is-size-4 has-text-weight-normal is-capitalized">Projects</p>
                <p class="subtitle is-size-7"><a href="">Add New Project</a></p>
                </article>
                <article class="tile is-child notification is-white box is-radiusless">
                <p class="title is-size-4 has-text-weight-normal is-capitalized">Experience</p>
                <p class="subtitle is-size-7"><a href="">Add New Experience</a></p>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-white box is-radiusless">
                <p class="title is-size-4 has-text-weight-normal is-capitalized">Elements</p>
                <p class="subtitle is-size-7"><a href="">Add New Project Element</a></p>
                <!-- <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/640x480.png">
                </figure> -->
                </article>
            </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-white box is-radiusless">
                <p class="title is-size-4 has-text-weight-normal is-capitalized">Educations</p>
                <p class="subtitle is-size-7"><a href="">Add New Education</a></p>
                <div class="content">
                <!-- Content -->
                </div>
            </article>
            </div>
        </div>
        <div class="tile is-parent">
                <article class="tile is-child notification is-white box is-radiusless">
            <div class="content">
                <p class="title is-size-4 has-text-weight-normal is-capitalized">General</p>
                <div class="content">
                
                    <aside class="menu">
                        <p class="menu-label">
                            <a href="">About</a>
                        </p>
                        <p class="menu-label">
                            <a href="">Introduction</a>
                        </p>
                        <p class="menu-label">
                            <a href="">Contact</a>
                        </p>
                        <p class="menu-label">
                            <a href="">Messages</a>
                        </p>
                    </aside>

                    

                </div>
            </div>
            </article>
        </div>
        </div>
</template>

<script>
export default {
    name: 'DashMenu',
    data () {
        return {
            
        }
    }
    // computed: {
    //         welcome() {
    //             return this.$store.getters.products
    //         }
    //     }
}
</script>

<style>

</style>
