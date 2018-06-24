<template>
	<div class="resultslider" v-if="answer.id">
		<div class="resultslider--result"
			:style="{ width: cssPercent(answer.answer), background: nullColor(answer) }"
		>
		</div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        	'answer_id'
        ],

        data() {
            return {
            	'answer': {},
            }
        },

        mounted() {
        	this.getAnswer();
        	window.Echo.private('groupscores.' + this.answer_id).listen('GroupscoresUpdated', e => {
        	    this.getAnswer();
        	});
        },

        computed: {
        },

        methods: {
        	getAnswer() {
        		var home = this;
        		axios.get('/api/answer/' + this.answer_id)
	        		.then(function(response) {
	        			home.answer = response.data;
	        		})
        	},

            cssPercent: function (value) {
                if(value == null) {
                    return 100;
                } else {
                    return (value * 10) + '%';
                }
            },

            nullColor: function (answer) {
                var thiscolor = '';
                if(answer.answer == null) {
                    thiscolor = 'white';
                }
                return thiscolor;
            },
        }
    }
</script>