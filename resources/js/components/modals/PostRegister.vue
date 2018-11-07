<template>
    <transition name="modal" v-if="!hide">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            <img class="logo" src="/images/7founders-logo.png">
                        </slot>
                        <span class="glyphicon glyphicon-remove-circle close-modal-btn" @click="close"></span>
                        <img class="medium-avatar" src="/images/userImg.png">
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            <div class="row justify-content-center">
                                <div class="w-100">
                                    <div class="card-body">
                                        <div class="col-md-10 m-auto">
                                            <div class="step-1" v-if="step === 1">
                                                <div class="text">
                                                    Hi, I´m Constantin!<br><br>
                                                    I am the CEO of 7founders and I will help you
                                                    <br> to setup your expert profile.
                                                    <br><br>It will only take a minute….
                                                </div>
                                            </div>
                                            <div class="step-2" v-if="step === 2">
                                                <div class="text">
                                                    What kind of investment project<br> interest you most?
                                                </div>
                                                <div class="projects">
                                                    <input type="radio"
                                                           name="name"
                                                           id="project1"
                                                           value="mostly_physcial"
                                                           v-model="investmentProject"
                                                    />
                                                    <label for="project1">
                                                        <div class="box">
                                                            <div class="userBox"></div>
                                                            <h3>Something <br> mostly physcial?
                                                            </h3>
                                                        </div>
                                                    </label>

                                                    <input
                                                        type="radio"
                                                        name="name"
                                                        id="project2"
                                                        value="crypto_blockchain"
                                                        v-model="investmentProject"
                                                    />
                                                    <label for="project2">
                                                        <div class="box">
                                                            <div class="userBox"></div>
                                                            <h3>Something <br> Crypto / Blockchain?
                                                            </h3>
                                                        </div>
                                                    </label>

                                                    <input
                                                        type="radio"
                                                        name="name"
                                                        id="project3"
                                                        value="mostly_digital"
                                                        v-model="investmentProject"
                                                    />
                                                    <label for="project3">
                                                        <div class="box">
                                                            <div class="userBox"></div>
                                                            <h3>Something <br> mostly digital?
                                                            </h3>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="step-3" v-if="step === 3">
                                                <div class="text">
                                                    Do you have additional quick-preferences?
                                                </div>
                                                <div class="col-md-8 m-auto">
                                                    <label class="modal-label">
                                                        What status range should potential projects have?
                                                    </label>

                                                    <vue-slider v-model="vuSliderSettings.value"
                                                                :width="vuSliderSettings.width"
                                                                :height="vuSliderSettings.height"
                                                                :process-style="vuSliderSettings.processStyle"
                                                                :tooltip="vuSliderSettings.tooltip"
                                                                :dot-size="vuSliderSettings.dotSize"
                                                    ></vue-slider>
                                                    <div class="row slider-description">
                                                        <div class="col-md text-left">
                                                            EARLY <br>SKETCH-OUT
                                                        </div>
                                                        <div class="col-md text-center">
                                                            FULLY OPERATIONAL <br>BUT NOT LIVE
                                                        </div>
                                                        <div class="col-md text-right">
                                                            LIVE & GENERATION <br>REVENUES
                                                        </div>
                                                    </div>
                                                    <label class="modal-label mt-3">
                                                        SC Investment Forms
                                                    </label>
                                                    <div class="row mt-3">
                                                        <div class="col-md investment-form">
                                                            MACRO TASKS
                                                            <switches
                                                                class="float-right"
                                                                :theme=vueSwitchSettings.theme
                                                                v-model="marcoTask"
                                                                :type-bold="vueSwitchSettings.typeBold"
                                                            ></switches>
                                                        </div>
                                                        <div class="col-md investment-form">
                                                            CD FOUNDER
                                                            <switches
                                                                class="float-right"
                                                                v-model="cdFounder"
                                                                :theme=vueSwitchSettings.theme
                                                                :type-bold="vueSwitchSettings.typeBold"
                                                            ></switches>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="step-4" v-if="step === 4">
                                                <div class="text">
                                                    Please, tell us a little more about the company
                                                    <br>you work for and your job.
                                                </div>
                                                <label class="modal-label">The company you work for currently</label>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <input type="text" v-model="companyName"
                                                               placeholder="COMPANY NAME?"
                                                               class="modal-input"/>
                                                    </div>
                                                    <div class="col-md">
                                                        <input type="text" v-model="activeIndustry"
                                                               placeholder="ACTIVE IN WITCH INDUSTRY?"
                                                               class="modal-input"/>
                                                    </div>
                                                </div>
                                                <label class="modal-label">Your job</label>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <input type="text" v-model="jobTitle"
                                                               placeholder="JOBTITLE"
                                                               class="modal-input"/>
                                                    </div>
                                                    <div class="col-md">
                                                        <input type="text" v-model="workedHere"
                                                               placeholder="WORKED HERE HOW LONG?"
                                                               class="modal-input"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step-5" v-if="step === 5">

                                            </div>
                                            <div class="step-6" v-if="step === 6">

                                            </div>
                                            <button type="button" class="modal-next-btn" @click="nextStep">
                                                {{step === 1 ? "Lets' Go!" : "Next"}}
                                                <img class="arrow-right" src="/images/arrow-right.png">
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
    import vueSlider from 'vue-slider-component';
    import Switches from 'vue-switches';
    import axios from 'axios';

    export default {
        data: () => {
            return {
                step: 1,
                investmentProject: null,
                jobTitle: null,
                companyName: null,
                activeIndustry: null,
                workedHere: null,
                marcoTask: true,
                cdFounder: true,
                lastStep: 4,
                hide: false,

                vueSwitchSettings: {
                    theme: 'custom',
                    typeBold: true
                },
                vuSliderSettings: {
                    value: [0, 30],
                    height: 15,
                    width: '100%',
                    processStyle: {
                        backgroundImage: "-webkit-linear-gradient(left, #2dd6e0, #0590dd)"
                    },
                    tooltip: false,
                    dotSize: 32
                }
            }
        },
        methods: {
            close() {
                console.log('close');
                this.hide = true;
            },
            nextStep() {
                this.step += 1;
                if (this.step > this.lastStep) {
                    let options = {
                        investment_project: this.investmentProject,
                        job_title: this.jobTitle,
                        company_name: this.companyName,
                        active_industry: this.activeIndustry,
                        worked_here: this.workedHere,
                        marco_task: this.marcoTask,
                        cd_founder: this.cdFounder,
                        status_range_start: this.vuSliderSettings.value[0],
                        status_range_end:  this.vuSliderSettings.value[1]
                    };

                    axios.post('/user/info', options).then((response) => {
                        // console.log('response', response);
                        if (response.status === 200) {
                            this.close();
                        }
                    });
                }
            }
        },
        components: {
            vueSlider, Switches
        }
    }
</script>

<style scoped>

    .slider-description {
        font-size: 12px;
        color: #b5c5cfd6;
    }


</style>


