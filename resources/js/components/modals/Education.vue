<template>
   <modal-wrapper text="Add ad Education">
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
   </modal-wrapper>
</template>

<script>
    import DatePicker from 'vue2-datepicker'
    import ModalWrapper from "../ModalWrapper";

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
            save() {
                let params = {
                    name: this.educationName,
                    study_field: this.studyField,
                    start_year: this.getYear(this.datePickerSettings.start),
                    end_year: this.getYear(this.datePickerSettings.end),
                };

                this.$root.$emit('save-user-data', '/profile/education', params, 'educations')
            },
            getYear(datetime) {
                let date = new Date(datetime);
                return date.getFullYear() ;
            }
        },
        components: {
            ModalWrapper,
            DatePicker
        }
    }
</script>

<style scoped>

</style>
