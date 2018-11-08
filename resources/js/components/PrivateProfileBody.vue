<template>
    <div class="col-md-8 m-auto profile-body">
        <div class="input-wrapper">
            <div class="form-group">
                <label class="profile-label">About Me</label>
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
                <label class="profile-label">Work Experience</label>
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
                <label class="profile-label">Skills</label>
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
                <label class="profile-label">Network</label>
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
                <label class="profile-label">Education</label>
                <div class="educations" v-if="educations">
                    <div class="education" v-for="education in educations">
                        <div class="row">
                            <div class="col-2 m-auto">
                                <div class="icon-box">
                                    <img src="/images/education.png">
                                </div>
                            </div>
                            <div class="col-6 m-auto">
                                {{education.name}}
                                <br><span class="blue-text">{{education.study_field}}</span>
                            </div>
                            <div class="col-4 float-right text-right m-auto">
                                {{education.start_year}} - {{education.end_year}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" v-if="!educations">
                        Write a short intro about yourself
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
                <label class="profile-label">Recommendations</label>
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
                <label class="profile-label">Projects</label>
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
                <label class="profile-label">Languages</label>
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
