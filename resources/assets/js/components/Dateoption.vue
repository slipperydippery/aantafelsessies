<template>
	<div class="section__panel dateoption">

		<div class="section__panel--title">
			<strong>{{ dateoption.datetime | formatDate }}</strong>
			<remove-modal
				:item_title= " dateoption.datetime | formatDate "
				:item_id=" dateoption.id "
				@input="removeDateoption()"
				v-if="isAdmin"
			>
			</remove-modal>
		</div>

		<span class="dateoption--set">
			<template v-for="(availability, index) in dateoption.availabilities" v-if="availability.scan.id == authscan_id">
				<set-availability
					v-model="dateoption.availabilities[index]"
				>
				</set-availability>
			</template>
		</span>

		<div class="row dateoption--availability" v-for="availability in dateoption.availabilities">
			<img src="/img/yes_full.svg" alt="" v-if="availability.available == 'yes'">
			<img src="/img/maeby_full.svg" alt="" v-if="availability.available == 'maeby'">
			<img src="/img/no_full.svg" alt="" v-if="availability.available == 'no'">
			<img src="/img/unknown.svg" alt="" v-if="availability.available == null">
			<span>{{ availability.scan.user.name }}</span>
		</div>


	</div>
</template>

<script>
	import moment from 'moment';

    export default {
        props: {
	        dateoption: { required: true },
	        authscan_id: { required: true},
	        isAdmin: { default: false }
        },

        data() {
            return {
            }
        },

        mounted() {
        },

        filters: {
			formatDate: function(value) {
				if (value) {
					return moment(value).format("D MMMM 'YY, H:mm");
				}
			}
        },

        methods: {
        	removeDateoption() {
        		var home = this;
        		axios.get('/api/dateoption/' + this.dateoption.id + '/destroy')
        			.then( (response) => {
        				home.$emit('removeDateoption', this.dateoption);
        			} )
        	},
        }
    }
</script>