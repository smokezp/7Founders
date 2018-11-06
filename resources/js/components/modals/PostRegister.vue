<template>
    <transition name="modal" v-if="!hide">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container" v-click-outside="close">

                    <div class="modal-header">
                        <slot name="header">
                            <img class="logo" src="images/7founders-logo.png">
                        </slot>
                        <span class="glyphicon glyphicon-remove-circle close-modal-btn" @click="close"></span>
                        <img class="medium-avatar" src="images/userImg.png">
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            <div class="row justify-content-center">
                                <div class="card w-100">
                                    <div class="card-body">
                                        Hi, I´m Constantin!

                                        I am the CEO of 7founders and I will help you to setup your expert profile.

                                        It will only take a minute….
                                        <!--<div class="form-group row">-->
                                            <!--<label for="email"-->
                                                   <!--class="col-sm-4 col-form-label text-md-right">Email</label>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<input v-model="email" id="email" type="email" class="form-control">-->

                                            <!--</div>-->
                                        <!--</div>-->

                                        <!--<div class="form-group row">-->
                                            <!--<label for="password"-->
                                                   <!--class="col-md-4 col-form-label text-md-right">Password</label>-->

                                            <!--<div class="col-md-6">-->
                                                <!--<input id="password" type="password" class="form-control"-->
                                                       <!--v-model="password">-->
                                            <!--</div>-->
                                        <!--</div>-->

                                        <!--<div class="form-group row mb-0">-->
                                            <!--<div class="col-md-8 offset-md-4">-->
                                                <!--<button type="submit" class="btn btn-primary" @click="submit">-->
                                                    <!--Login-->
                                                <!--</button>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    import ClickOutside from 'vue-click-outside';

    export default {
        data: () => {
            return {
                email: null,
                password: null,
                hide: false
            }
        },
        methods: {
            close() {
                this.hide = true;
            },
            submit() {

            }
        },
        directives: {
            ClickOutside
        }
    }
</script>
