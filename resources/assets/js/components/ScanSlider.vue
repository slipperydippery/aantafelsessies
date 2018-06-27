<template>
	<div class="rangeslider--container">
	    <input type="range" 
	        min="0" max="10"
	        step="1"
	        v-if="answer.id"
	        v-model="answer.answer" 
	        v-on:change="saveAnswer()"
	    >
	    <span class="question--answer" v-if="answer.answer " >{{ answer.answer }}</span>
	    <span class="question--answer question--answer__preanswer" v-else >-</span>
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
            	'answer': {}
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
        	}
        }
    }
</script>