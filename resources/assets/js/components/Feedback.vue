<template>
    <div class="">
        <slider-input v-model="feedbackanswer.answer" @input="onChange"></slider-input>
        <div class="form-group" v-if="lowScore">
            <label for="exampleFormControlTextarea1">Oef! waarom zo slecht? kun je een toelichting geven?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" v-model="feedbackanswer.justification" @blur="onChange"></textarea>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'workscan',
            'workfeedbackanswer'
        ],

        data() {
            return {
                scan: {},
                feedbackanswer: {},
            }
        },

        mounted() {
            this.feedbackanswer = this.workfeedbackanswer;
        },

        computed: {
            lowScore() {
                return this.feedbackanswer.answer < 6;
            }
        },

        methods: {
            onChange: function () {
                var home = this;
                axios.post('/api/feedbackanswer/' + home.feedbackanswer.id + '/update', {
                        feedbackanswer: home.feedbackanswer
                    })
                    .catch( e => {
                        home.errors.push( e )
                } )   
            },
        }
    }
</script>