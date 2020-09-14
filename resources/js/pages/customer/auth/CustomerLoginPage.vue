<template>
    <base-layout>
        <section class="py-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card card-lg mb-10 mb-md-0">
                            <div class="card-body">
                                <h6 class="mb-7">Returning Customer</h6>
                                <form @submit.prevent="login" autocomplete="off">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="loginEmail">
                                                    Email Address *
                                                </label>
                                                <input class="form-control form-control-sm" id="loginEmail" name="email"
                                                       type="email" v-model="email" placeholder="Email Address *" required="">
                                            </div>

                                        </div>
                                        <div class="col-12">

                                            <!-- Password -->
                                            <div class="form-group">
                                                <label class="sr-only" for="loginPassword">
                                                    Password *
                                                </label>
                                                <input class="form-control form-control-sm" id="loginPassword"
                                                       name="password" v-model="password" type="password" placeholder="Password *"
                                                       required="">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md">

                                            <!-- Remember -->
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="loginRemember"
                                                           type="checkbox">
                                                    <label class="custom-control-label" for="loginRemember">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-auto">

                                            <!-- Link -->
                                            <div class="form-group">
                                                <a class="font-size-sm text-reset" data-toggle="modal"
                                                   href="#modalPasswordReset">Forgot Password?</a>
                                            </div>

                                        </div>
                                        <div class="col-12">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-dark" type="submit">
                                                Sign In
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">

                        <!-- Card -->
                        <div class="card card-lg">
                            <div class="card-body">

                                <!-- Heading -->
                                <h6 class="mb-7">New Customer</h6>

                                <!-- Form -->
                                <form @submit.prevent="register" autocomplete="off">
                                    <div class="row">
                                        <div class="col-12">

                                            <!-- Email -->
                                            <div class="form-group">
                                                <label class="sr-only" for="registerFirstName">
                                                    First Name *
                                                </label>
                                                <input class="form-control form-control-sm" name="first_name"
                                                       id="registerFirstName" v-model="reg_email" type="text" placeholder="First Name *"
                                                       required="">
                                            </div>

                                        </div>
                                        <div class="col-12">

                                            <!-- Email -->
                                            <div class="form-group">
                                                <label class="sr-only" for="registerLastName">
                                                    Last Name *
                                                </label>
                                                <input class="form-control form-control-sm" name="last_name"
                                                       id="registerLastName" v-model="first_name" type="text" placeholder="Last Name *"
                                                       required="">
                                            </div>

                                        </div>
                                        <div class="col-12">

                                            <!-- Email -->
                                            <div class="form-group">
                                                <label class="sr-only" for="registerEmail">
                                                    Email Address *
                                                </label>
                                                <input class="form-control form-control-sm" name="email"
                                                       id="registerEmail"
                                                       type="email" v-model="last_name" placeholder="Email Address *" required="">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- Password -->
                                            <div class="form-group">
                                                <label class="sr-only" for="registerPassword">
                                                    Password *
                                                </label>
                                                <input class="form-control form-control-sm" name="password"
                                                       id="registerPassword" type="password" placeholder="Password *"
                                                       required="" v-model="reg_password">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-6">

                                            <!-- Password -->
                                            <div class="form-group">
                                                <label class="sr-only" for="registerPasswordConfirm">
                                                    Confirm Password *
                                                </label>
                                                <input class="form-control form-control-sm" name="password_confirmation"
                                                       id="registerPasswordConfirm" type="password"
                                                       placeholder="Confirm Password *" required="" v-model="conf_reg_password">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-auto">

                                            <!-- Link -->
                                            <div class="form-group font-size-sm text-muted">
                                                By registering your details, you agree with our Terms &amp; Conditions,
                                                and Privacy and Cookie Policy.
                                            </div>

                                        </div>
                                        <div class="col-12 col-md">

                                            <!-- Newsletter -->
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="registerNewsletter"
                                                           type="checkbox">
                                                    <label class="custom-control-label" for="registerNewsletter">
                                                        Sign me up for the Newsletter!
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-dark" type="submit">
                                                Register
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </base-layout>
</template>

<script>
    export default {
        name: 'CustomerLoginPage',
        data() {
            return {
                email: "",
                password: "",
                first_name: "",
                last_name: "",
                reg_email: "",
                reg_password: "",
                conf_reg_password: ""
            }
        },
        methods: {
            login: function () {
                let email = this.email
                let password = this.password
                this.$store.dispatch('login', {email, password})
                    .then(() => this.$router.push('/'))
                    .catch(err => console.log(err))
            },
            register: function () {
                let data = {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.reg_email,
                    password: this.reg_password,
                    password_confirmation: this.conf_reg_password
                }
                this.$store.dispatch('register', data)
                    .then(() => this.$router.push('/'))
                    .catch(err => console.log(err))
            }
        }
    }
</script>
