<template>
    <div class="col-md-8 m-auto profile-body">
        <div class="input-wrapper">
            <div class="form-group">
                <label>About Me</label>
                <span class="glyphicon glyphicon-eye-close"></span>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Work Experience</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Skills</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Network</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Education</label>
                <div class="row">
                    <div class="col-sm" v-if="!educations">
                        Write a short intro about yourself
                    </div>
                    <div class="educations" v-else>
                        <div class="education" v-for="education in educations">
                            {{education.name}}
                            {{education.study_field}}
                            {{education.start_date}}
                            {{education.end_date}}
                        </div>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right" @click="showModal = 'education'">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Recommendations</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Projects</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <div class="form-group">
                <label>Languages</label>
                <div class="row">
                    <div class="col-sm">
                        Write a short intro about yourself
                    </div>
                    <div class="col-sm">
                        <button type="button" class="circle-btn float-right">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <education-modal v-if="showModal === 'education'"></education-modal>
    </div>

</template>

<script>
    import EducationModal from './modals/Education.vue';

    export default {
        name: "PrivateProfileBody",
        props:['educations'],
        data: () => {
            return {
                showModal: null
            }
        },
        created() {
            this.$root.$on('add-user-data', (prop, data) => {
                this[prop].push(data);
            });

            this.$root.$on('hide-modal', () => {
                this.showModal = null;
            });
        },
        components: {
            EducationModal
        }

    }
</script>

<style scoped>

</style>
