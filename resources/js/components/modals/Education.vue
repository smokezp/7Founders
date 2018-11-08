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
                                Add ad Education
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
                                                    <date-picker
                                                        lass="float-left"
                                                        v-model="datePickerSettings.start"
                                                        :first-day-of-week="datePickerSettings.firstDayOfWeek"
                                                        :lang="datePickerSettings.lang"
                                                        :width="datePickerSettings.width"
                                                        :format="datePickerSettings.format"
                                                        :type="datePickerSettings.type"
                                                        :placeholder="datePickerSettings.placeholder_start"
                                                    ></date-picker>
                                                </div>
                                                <div class="col-md">
                                                    <date-picker
                                                        class="float-right"
                                                        v-model="datePickerSettings.end"
                                                        :first-day-of-week="datePickerSettings.firstDayOfWeek"
                                                        :lang="datePickerSettings.lang"
                                                        :width="datePickerSettings.width"
                                                        :format="datePickerSettings.format"
                                                        :type="datePickerSettings.type"
                                                        :placeholder="datePickerSettings.placeholder_end"
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
    import DatePicker from 'vue2-datepicker'
    import axios from 'axios';

    export default {
        name: "EducationModal",
        data: () => {
            return {
                educationName: null,
                studyField: null,

                datePickerSettings: {
                    start: '',
                    end: '',
                    width: '100%',
                    lang: 'en',
                    firstDayOfWeek: 1,
                    format: 'YYYY',
                    type: 'year',
                    placeholder_start: 'START DATE',
                    placeholder_end: 'END DATE'
                }
            }
        },
        methods: {
            close() {
                console.log('close');
                this.$root.$emit('hide-modal');
            },
            save() {
                axios.post('/profile/education', {
                    name: this.educationName,
                    study_field: this.studyField,
                    start_year: this.getYear(this.datePickerSettings.start),
                    end_year: this.getYear(this.datePickerSettings.end),
                }).then((response) => {
                    if (response.status === 200) {
                        this.$root.$emit('add-user-data', 'educations', response.data);
                        this.close();
                    }
                });
            },
            getYear(datetime) {
                let date = new Date(datetime);
                return date.getFullYear() ;
            }
        },
        components: {
            DatePicker
        }
    }
</script>

<style scoped>

</style>
