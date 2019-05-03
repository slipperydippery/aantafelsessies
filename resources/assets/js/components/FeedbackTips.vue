<template>
	<div class="form-group">
	    <textarea class="form-control" id="tipsTextarea" rows="5" v-model="feedback.tips" @blur="onChange"></textarea>
	</div>

</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        	'workfeedback'
        ],

        data() {
            return {
            	'feedback' : {}
            }
        },

        mounted() {
        	this.feedback = this.workfeedback;
        },

        computed: {
        },

        methods: {
        	onChange() {
        		var home = this;
        		axios.post('/api/feedback/' + this.feedback.id + '/update', {
        			feedback: home.feedback
        		})
        	}
        }
    }
</script>