<template>
	<div class="col-sm-12 table table__results">
		<div class="row">
			<div class="col-sm-2"></div>
				<div class="col-sm-2" v-for="question in theme.questions">
					<strong>Vraag {{ question.id }} <br></strong>
					<span v-b-tooltip.hover :title="question.body">{{ question.title }}</span>
				</div>
		</div>
		<div class="row resultstable--row--average">
			<div class="col-sm-2 average">Gemiddeld</div>
			<div class="col-sm-2" v-for="question in theme.questions">
				<result-slider-average
					:average = "average(question)"
				>
				</result-slider-average>
			</div>
		</div>
		<div class="row" v-for="scan in group.scans">
			<div 
				class="col-sm-2 nowrap" 
				:class="['instantietype-' + scan.instantie.instantietype.id + '-leftborder', (scan.id == group.owner.id) ? 'owner-leftborder' : '' ]"
			> 
				{{ scan.instantie.name }} 
			</div>
			<div class="col-sm-2" v-for="question in theme.questions">
				<result-slider
					:answer=" scan.answers | answerOfQuestion(question.id) "
				>
				</result-slider>
			</div>
		</div>
	</div>

</template>

<script>

    export default {
        props: [
	        'group_id',
	        'theme_id'
        ],

        data() {
            return {
            	'theme': {},
            	'group': {}
            }
        },

        mounted() {
        	this.getTheme();
        	this.getGroup();
        	window.Echo.private('groupscores.' + this.group_id).listen('GroupscoresUpdated', e => {
        	    this.getGroup();
        	});
        },

        computed: {
        },

        filters: {
        	answerOfQuestion(value, question_id) {
        		var questionanswer = null;
        		value.forEach( answer => {
        			if( answer.question_id === question_id  ){
        				questionanswer = answer;
        			}
        		} )	
        		return questionanswer;
        	}
        },

        methods: {
        	getTheme() {
        		console.log('getting theme');
        		var home = this;
        		axios.get('/api/theme/' + this.theme_id)
        			.then( response => {
        				home.theme = response.data
        			} );
        	},

        	getGroup() {
        		console.log('getting group');
        		var home = this;
        		axios.get('/api/group/' + this.group_id)
	        		.then( response => {
	        			home.group = response.data
	        		} );
        	},

        	average(question) {
        		if(! this.group.id) {
        			return null;
        		}
        		var scantotal = 0;
        		var scancount = 0;
        		this.group.scans.forEach( scan => {
        			scan.answers.forEach( answer => {
        				if( answer.question_id === question.id && answer.answer){
        					scantotal += parseFloat(answer.answer);
        					scancount ++
        				}
        			} )
        		} )
        		return scantotal /  scancount;
        	}
        }
    }
</script>