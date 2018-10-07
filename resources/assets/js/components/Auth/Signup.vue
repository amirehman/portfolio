<template>
    <div>
            <div class="container  m-t-0">
                <div class="column is-4">
                    <p class="subtitle has-text-grey">Signup.</p>
                    <div class="box is-radiusless">
                        <ul>
                            <li v-if="errors.name">
                                {{ errors.name[0] }}
                            </li>
                            <li v-if="errors.email">
                                {{ errors.email[0] }}
                            </li>
                            <li v-if="errors.password">
                                {{ errors.password[0] }}
                            </li>

                        </ul>
                        <form @submit.prevent="signup">
                           
                            <b-field>
                                <b-input 
                                    v-model="form.name"
                                    size="is-small"
                                    placeholder="Full Name">
                                </b-input>
                            </b-field>
                            <b-field>
                                <b-input
                                    v-model="form.email"
                                    size="is-small"
                                    placeholder="email">
                                </b-input>
                            </b-field>

                            <b-field>
                                <b-input type="password"
                                    v-model="form.password"
                                    placeholder="Password"
                                    value="iwantmytreasure"
                                    size="is-small"
                                    password-reveal>
                                </b-input>
                            </b-field>
                            <b-field>
                                <b-input type="password"
                                    v-model="form.password_confirmation"
                                    placeholder="Password"
                                    value="iwantmytreasure"
                                    size="is-small"
                                    password-reveal>
                                </b-input>
                            </b-field>
                            
                            <button class="button is-block is-small">Signup</button>
                        </form>
                    </div>
                    
                </div>
            </div>
    </div>
</template>

<script>


export default {
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                },
                errors: {}
            }
        },
        methods:{
            signup(){
                axios.post('/api/auth/signup', this.form)
                .then(res => {
                    User.responseAfterLogin(res)
                    this.$router.push({name: 'dashboard'})
                }) 
                .catch(error => this.errors = error.response.data.errors)
            }
        }
    }
</script>

<style>

</style>
