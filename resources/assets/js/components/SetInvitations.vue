<template>
	<div class="">
		<div class="row row__titlerow d-flex flex-row align-items-stretch">
			<div 
				class="col-md-3 title borderless " 
				:class="thisClass(instantietype)"
				v-for="instantietype in instantietypes"
			>
				{{ instantietype.name }}
			</div>
		</div>
		<div class="row row__tablerow">
			<div class="col-md-3 row__tablerow--tablecolumn" v-for="instantietype in instantietypes" :class="thisClass(instantietype)">
				<div class="row ">
					<div 
						v-for="partner in instantietype.partners"
						v-if="partner.collaboration != 'maeby'"
						class="col-sm-12"
					>
						<div 
							class="card--partner card--partner__small clickable" 
							:class="[{active: partner.collaboration == 'no'}, thisClass(instantietype), {selected: partner.invitable}]"
							@click="toggleInvitable(partner)"
						>
							{{ partner.instantie.name }} 
								<span v-if="partner.collaboration == 'yes'" class="collaboratechek"><i class="material-icons"> check </i></span>
								<span v-if="partner.collaboration == 'no'" class="collaboratechek"><i class="material-icons"> close </i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row section__panel--devision">
			<div class="col-sm-12">
				<h5>Mijn samenstelling</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12" v-if="noneSelected">
				<h1 class="warning">Je hebt nog geen partners geselecteerd</h1>
			</div>
			<template v-for="instantietype in instantietypes">
				<div class="col-sm-2" v-for="partner in instantietype.partners" v-if="partner.invitable == true">
					<div class="card card__2 card--partner clickable" @click="toggleInvitable(partner)"
						:class="[thisClass(instantietype)]"
					>
                        <div class="card-icons">
							<span class="card-closeicon">
								<i class="material-icons"> close </i>
							</span>
						</div>
						<img src="/img/user.svg" alt="">
						<div class="card-footer">
							{{ partner.instantie.name }}
						</div>
					</div>
				</div>
			</template>
		</div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
	        'inventarisatie_id'
        ],

        data() {
            return {
            	'instantietypes': [],	
            }
        },

        mounted() {
        	this.getInstantietypes();
        },

        computed: {
        	noneSelected() {
        		var noneselected = true;
        		this.instantietypes.forEach(function(instantietype) {
        			instantietype.partners.forEach(function(partner) {
        				if(partner.invitable) {
        					noneselected = false;
        				}
        			})
        		});
        		return noneselected;
        	}
        },

        methods: {
        	thisClass(instantietype){
        		return 'instantietype-' + instantietype.id;
        	},

        	getInstantietypes() {
	        	var home = this;
        		axios.get('/api/instantietype')
	        		.then(function(response){
	        			var temp = response.data;
	        			temp.forEach(function(instantietype){
	        				instantietype.partners = [];
	        			})
	        			home.instantietypes = temp;
	        			home.instantietypes.forEach(function(instantietype){
	        				home.getInstanties(instantietype)
	        			})
	        		})
        	},

        	getInstanties(thisinstantietype) {
        		var home = this;
        		axios.get('/api/inventarisatie/' + this.inventarisatie_id + '/instantietype/' + thisinstantietype.id + '/instantie')
	        		.then(function(response){
	        			thisinstantietype.partners = [];
	        			response.data.forEach(function(instantie){
	        				thisinstantietype.partners.push(instantie);
	        			})
	        		});
        	},

        	toggleInvitable(thispartner) {
        		thispartner.invitable = ! thispartner.invitable;
        		axios.post('/api/partner/' + thispartner.id, {
        			partner: thispartner
        		})
        	},
        }
    }
</script>