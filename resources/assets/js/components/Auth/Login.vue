<template>
    <div>
            <div class="container  m-t-0">
                <div class="column is-4">
                    <p class="subtitle has-text-grey">Login to proceed....</p>
                    <div class="box is-radiusless">
                        <form @submit.prevent="authenticate">
                           
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
    import {login} from '../../helpers/auth';
    export default {
        name: "login",
        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                error: null
            };
        },
        methods: {
            authenticate() {
                this.$store.dispatch('login');
                login(this.$data.form)
                    .then((res) => {
                        this.$store.commit("loginSuccess", res);
                        this.$router.push({path: '/me/dashboard'});
                    })
                    .catch((error) => {
                        this.$store.commit("loginFailed", {error});
                    });
            }
        },
        computed: {
            authError() {
                return this.$store.getters.authError;
            }
        }
    }
</script>


<style>

</style>
