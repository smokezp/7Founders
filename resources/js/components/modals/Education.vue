<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container" v-click-outside="close">

                    <div class="modal-header">
                        <slot name="header">
                            <img class="logo" src="/images/7founders-logo.png">
                        </slot>
                        <span class="glyphicon glyphicon-remove-circle close-modal-btn" @click="close"></span>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            <div class="row justify-content-center">
                                <div class="w-100">
                                    <div class="card-body">
                                        <div class="col-md-4 m-auto">
                                            <div class="row">
                                                <div class="col-md">
                                                    <input type="text" v-model="educationName"
                                                           placeholder="EDUCATION NAME"
                                                           class="modal-input"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <input type="text" v-model="studyField"
                                                           placeholder="FIELD OF STUDY"
                                                           class="modal-input"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <date-picker v-model="datePickerSettings.start"
                                                                 :first-day-of-week="datePickerSettings.firstDayOfWeek"
                                                                 :lang="datePickerSettings.lang"
                                                                 :width="datePickerSettings.width"
                                                    ></date-picker>
                                                </div>
                                                <div class="col-md">
                                                    <date-picker v-model="datePickerSettings.end"
                                                                 :first-day-of-week="datePickerSettings.firstDayOfWeek"
                                                                 :lang="datePickerSettings.lang"
                                                                 :width="datePickerSettings.width"
                                                    ></date-picker>
                                                </div>
                                            </div>
                                            <button type="button" class="modal-next-btn" @click="save">
                                                Save
                                            </button>
                                        </div>
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
    import DatePicker from 'vue2-datepicker'

    export default {
        name: "EducationModal",
        data: () => {
            return {
                educationName: null,
                studyField: null,

                datePickerSettings: {
                    start: '',
                    end: '',
                    width: 120,
                    lang: 'en',
                    firstDayOfWeek: 1,
                }
            }
        },
        methods: {
            close() {
                console.log('close');
                this.$root.$emit('hide-modal');
            },
            save() {

            }
        },
        components: {
            DatePicker
        },
        directives: {
            ClickOutside
        }
    }
</script>

<style scoped>

</style>
