<template>
    <div>
            <div class="container  m-t-0">
                <div class="column is-4">
                    <p class="subtitle has-text-grey">Login to proceed....</p>
                    <div class="box is-radiusless">
                        <form @submit.prevent="login">
                           
                            <b-field>
                                <b-input 
                                v-model="form.email"
                                size="is-small"
                                placeholder="email">
                                </b-input>
                            </b-field>

                            <b-field
                                        type="is-success"
                                         message="This username is available">
                                <b-input type="password"
                                         v-model="form.password"
                                         placeholder="Password"
                                         value="iwantmytreasure"
                                         size="is-small"
                                         password-reveal>
                                </b-input>
                            </b-field>
                            
                            <button class="button is-block is-small">Login</button>
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
                    email: 'hi@amirrehman.com',
                    password: 'thisis'
                }
            }
        },
        methods: {
            login () {
                axios.post('/api/auth/login', this.form)
                .then(res => console.log(res.data))
                .catch(error => console.log(error.response.data))
            }
        }
    }
</script>

<style>

</style>
