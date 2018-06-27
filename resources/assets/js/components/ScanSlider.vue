<template>
	<div class="rangeslider--container">
	    <input type="range" 
	        min="0" max="10"
	        step="1"
	        v-if="answer.id"
	        v-model="answer.answer" 
	        v-on:change="saveAnswer()"
            :disabled = "nvt"
	    >
	    <span class="question--answer" v-if="answer.answer " >{{ answer.answer }}</span>
	    <span class="question--answer question--answer__preanswer" v-else >-</span>
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