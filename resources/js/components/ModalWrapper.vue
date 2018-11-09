<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <div class="col-4">
                            <slot name="header" class="float-left">
                                <img class="logo" src="/images/7founders-logo.png">
                            </slot>
                        </div>
                        <div class="col-4 text-center">
                            <div class="text">
                                {{text}}
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="glyphicon glyphicon-remove-circle close-modal-btn" @click="close"></span>
                        </div>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            <div class="row justify-content-center">
                                <div class="w-100">
                                    <div class="card-body">
                                        <slot></slot>
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
    import axios from 'axios';

    export default {
        name: "ModalWrapper",
        props: ['text'],
        created() {
            this.$root.$on('save-user-data', (url, params, save) => {
                axios.post(url, params).then((response) => {
                    if (response.status === 200) {
                        this.$root.$emit('add-user-data', save, response.data);
                        this.close();
                    }
                });
            });
        },
        methods: {
            close() {
                this.$root.$emit('hide-modal');
            }
        }
    }
</script>

<style scoped>

</style>
