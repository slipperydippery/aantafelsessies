<template>
    <div class="">
        <slider-input v-model="answer.answer" @input="saveAnswer()" :disabled="nvt"></slider-input>
        <button class="btn btn-outline-primary btn__nvt" @click="deactivate()" v-if="!nvt">niet van toepassing</button>
        <button class="btn btn-primary btn__nvt" @click="activate()" v-if="nvt">niet van toepassing</button>
    </div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
	        'answer_id',
        ],

        data() {
            return {
            	'answer': {},
                'nvt': false,
            }
        },

        mounted() {
        	this.getAnswer();
        },

        computed: {
        },

        methods: {
        	getAnswer() {
        		var home = this;
        		axios.get('/api/answer/' + this.answer_id)
        			.then(function(response){
        				home.answer = response.data
        			})
        	},
        	saveAnswer() {
        		axios.post('/api/answer/' + this.answer_id + '/update', {
        			'answer': this.answer,
        		})
        	},

            deactivate() {
                this.nvt = true;
                this.answer.answer = null;
                this.saveAnswer();
            },

            activate() {
                this.nvt = false;
            }
        }
    }
</script>