<template>
    <div class="progress-container">
        <div class="progress" style="height: 25px;">
            <div class="progress-bar" role="progressbar" style="width: {{value}}%"
                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProgressBar",
        props: [
            'height',
            'width',
            'value'
        ]
    }
</script>

<style scoped>

</style>
