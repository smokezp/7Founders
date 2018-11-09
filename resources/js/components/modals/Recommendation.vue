<template>
    <modal-wrapper text="Add a Recommendation">
        <div class="col-md-4 m-auto">
            <div class="row">
                <div class="col-md">
                    <input type="text" v-model="name"
                           placeholder="FIRST & SURNAME OF RECOMMENDER"
                           class="modal-input"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <input type="text"
                           placeholder="PERSONS TITLE"
                           class="modal-input"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <input type="text"
                           placeholder="PERSONS TITLE"
                           class="modal-input"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <textarea v-model="text"
                              placeholder="RECOMMENDATION TEXT"
                              class="modal-input"
                              rows="5"
                    > </textarea>
                </div>
            </div>
            <button type="button" class="modal-next-btn" @click="save">
                Save
            </button>
        </div>
    </modal-wrapper>
</template>

<script>
    import ModalWrapper from "../ModalWrapper";

    export default {
        name: "RecommendationModal",
        data: () => {
            return {
                name: null,
                text: null,
            }
        },
        methods: {
            save() {
                let params = {
                    name: this.name,
                    text: this.text
                };

                this.$root.$emit('save-user-data', '/profile/recommendation', params, 'recommendations')
            },
        },
        components: {
            ModalWrapper
        }
    }
</script>

<style scoped>

</style>
