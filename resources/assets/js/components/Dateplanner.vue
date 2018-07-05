<template>
	<div class="">
		<div class="row">
			<div class="col-sm-4" v-for="dateoption in dateplanner.dateoptions">
				<dateoption
					:dateoption="dateoption"
					:key="dateoption.id"
					:authscan_id="authscan_id"
					:is-admin="isAdmin"
					@removeDateoption="removeDateoption(dateoption)"
				>
				</dateoption>

			</div>
		</div>
		<add-dateoption
			:dateplanner_id = "dateplanner_id"
			@dateAdded="getDateoptions()"
			v-if="isAdmin"
		>
		</add-dateoption>
	</div>
</template>

<script>
    export default {
        props: {
	        dateplanner_id: { required: true },
	        authscan_id: { required: true},
	        isAdmin: { default: false }
        },

        data() {
            return {
            	dateplanner: {
	            	dateoptions: [],
            	},
            }
        },

        mounted() {
        	this.getDateoptions();
        },

        computed: {
        },

        methods: {
        	getDateoptions() {
        		axios.get('/api/dateplanner/' + this.dateplanner_id + '/dateoption')
	        		.then( (response ) => {
	        			this.dateplanner = response.data;
	        		} )
        	},
        	removeDateoption(dateoption) {
        		this.getDateoptions();
        	}
        }
    }
</script>