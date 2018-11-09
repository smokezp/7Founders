<template>
    <div class="row justify-content-center private-profile">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="progress-container">
                            <div class="progress">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 25%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-status">
                                25% Complete
                            </div>

                        </div>
                    </div>
                    <div class="second-row row">
                        <img class="big-avatar" src="/images/userImg.png">
                    </div>
                    <div class="row float-right">
                        <button type="button" class="btn btn-outline-light profile-btn">
                            <span class="glyphicon glyphicon-download"></span>Import LinkedIN Data
                        </button>
                        <button type="button" class="btn btn-outline-light profile-btn">
                            <span class="glyphicon glyphicon-cog"></span>Investment Preferences
                        </button>
                    </div>
                </div>
                <div class="profile-body">
                    <div class="col-md-6 pt-3 m-auto">
                        <div class="row text-center">
                            <div class="col-sm">
                                {{user.name}}
                            </div>

                        </div>
                        <div class="row text-center">
                            <div class="col-sm">
                                    <span class="blue-text">
                                        Full Stack Developer
                                    </span>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col-sm">
                                London, Great Britain
                            </div>
                        </div>
                    </div>

                </div>
                <div class="profile-body">
                    <div class="row button-section">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8 m-auto">
                            <div class="row">
                                <div class="col-sm text-center">
                                    <a href="#">CV Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Capital</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="custom-btn">
                                <img src="/svg/eye.svg">
                                Preview
                            </button>
                        </div>

                    </div>


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
                                <!--<div class="skills">-->
                                <!--<div class="row mt-3 mb-3">-->
                                <!--<div class="col-md">-->
                                <!--<div class="progress-container">-->
                                <!--<div class="progress" style="height: 5px;">-->
                                <!--<div class="progress-bar" role="progressbar" style="width: 80%"-->
                                <!--aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<span class="float-left">Grow Hacker</span>-->
                                <!--<span class="float-right">10+ years Expert</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-md">-->
                                <!--<div class="progress-container">-->
                                <!--<div class="progress" style="height: 5px;">-->
                                <!--<div class="progress-bar" role="progressbar" style="width: 80%"-->
                                <!--aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<span class="float-left">Grow Hacker</span>-->
                                <!--<span class="float-right">10+ years Expert</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="row mt-3 mb-3">-->
                                <!--<div class="col-md">-->
                                <!--<div class="progress-container">-->
                                <!--<div class="progress" style="height: 5px;">-->
                                <!--<div class="progress-bar" role="progressbar" style="width: 80%"-->
                                <!--aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<span class="float-left">Grow Hacker</span>-->
                                <!--<span class="float-right">10+ years Expert</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-md">-->
                                <!--<div class="progress-container">-->
                                <!--<div class="progress" style="height: 5px;">-->
                                <!--<div class="progress-bar" role="progressbar" style="width: 80%"-->
                                <!--aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>-->
                                <!--</div>-->
                                <!--<span class="float-left">Grow Hacker</span>-->
                                <!--<span class="float-right">10+ years Expert</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
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
                                <div class="educations" v-if="user.educations">
                                    <div class="education" v-for="education in user.educations">
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
                                    <div class="col-sm" v-if="!user.educations">
                                        Write a short intro about yourself
                                    </div>

                                    <div class="col-sm">
                                        <button type="button" class="circle-btn float-right"
                                                @click="showModal = 'education'">
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
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import EducationModal from './modals/Education.vue';

    export default {
        name: "PrivateProfile",
        props: ['user'],
        data: () => {
            return {
                showModal: null
            }
        },
        created() {
            this.$root.$on('add-user-data', (prop, data) => {
                this.user[prop].push(data);
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
