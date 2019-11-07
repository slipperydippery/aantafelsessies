<template>
	<div class="group--create">
	    <div class="alert alert-danger" v-if="errors.length">
	        <strong>Belangrijk!</strong> {{ errors }}.
	    </div>
	    <div class="form-group">
            <label class="input">Geef je gesprekssessie een naam:</label>
            <div class="alert alert-danger" v-if="errors.title" v-for="error in errors.title">
                <strong>Incompleet</strong> {{ error }}
            </div>
            <input type="text" v-model="title" placeholder="Geef jouw sessie een naam die herkenbaar is voor mensen uit jouw regio" class="form-control">
	    	
	    </div>

        <div class="form-group">
            <label class="input">Voor welke gemeente(n) maak je deze gesprekssessie?</label>
            <div class="alert alert-danger" v-if="errors.districts" v-for="error in errors.districts">
                <strong>Incompleet</strong> {{ error }}
            </div>
            <input type="text" v-model="districtsearch" class="form-control" placeholder="Zoek je gemeente" @keydown.enter="enterSearch()">
            <div class="row resultstable--row">
                <div class="col-sm-12">
                    <div class="infoblock" v-if="selecteddistricts.length || districtsearch != '' ">
                            <span v-if=" ! selecteddistricts.length">Klik op een gemeente om het aan je lijst toe te voegen</span>
                            <span v-if=" selecteddistricts.length ">Je kan meer dan meer dan 1 gemeente kiezen</span> <br>
                        <span
                            v-for="district in selecteddistricts"
                            @click="removeDistrictFromSelection(district)"
                            class="clickable selectable selectable--active"    
                        >
                            {{ district.title }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row resultstable--row">
                <div class="col-sm-12">
                    <span 
                        v-for="district in filteredAndSortedDistricts" 
                        @click="addDistrictToSelection(district)"
                        class="clickable selectable selectable--passive"
                    > 
                        {{ district.title }} 
                    </span>
                </div>
            </div>
        </div>

        <div class="row resultstable--row">
            <div class="col-sm-12">
                <button @click="saveGroup()" class="btn btn-primary btn-block" :disabled="clickedOnce">Maak de sessie aan</button>
            </div>
        </div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        	'instantietypes',
        	'alldistricts',
            'inventarisatie_id'
        ],

        data() {
            return {
                errors: [],
                title: '',
                instantie: {},
                clickedOnce: false,
                selecteddistricts: [],
                districtsearch: '',
            }
        },

        mounted() {
        },

        computed: {
            filtereddistricts: function () {
                var filteredarray = [];
                var home = this;
                if(home.districtsearch != ''){
                    this.alldistricts.forEach(function(thisdistrict){
                        if(thisdistrict.title.toLowerCase().includes(home.districtsearch.toLowerCase())) {
                            filteredarray.push(thisdistrict);
                        } 
                    })
                }
                return filteredarray;
            },

            filteredAndSortedDistricts: function() {
                function compare(a, b) {
                    if (a.title < b.title){
                        return -1;
                    }
                    if (a.title > b.title){
                        return 1;
                    }
                    return 0;
                }

                return this.filtereddistricts.sort(compare);
            }
        },

        methods: {
            sortDistricts: function(thisarray) {
                function compare(a, b) {
                    if (a.title < b.title){
                        return -1;
                    }
                    if (a.title > b.title){
                        return 1;
                    }
                    return 0;
                }
                return thisarray.sort(compare);
            },

            addDistrictToSelection: function(thisdistrict) {
                this.selecteddistricts.push(thisdistrict);
                this.sortDistricts(this.selecteddistricts);
                this.alldistricts.splice(this.alldistricts.indexOf(thisdistrict), 1);
                this.filtereddistricts.splice(this.filtereddistricts.indexOf(thisdistrict), 1);
                this.$forceUpdate();
                this.districtsearch = '';
            },

            removeDistrictFromSelection: function(thisdistrict) {
                this.alldistricts.push(thisdistrict);
                this.filtereddistricts.push(thisdistrict);
                this.sortDistricts(this.filtereddistricts); 
                this.selecteddistricts.splice(this.selecteddistricts.indexOf(thisdistrict), 1);
                this.$forceUpdate();
            },
            
        	isActiveInstantie(thisinstantie) {
        		return this.instantie.id == thisinstantie.id;
        	},

        	setInstantie(thisinstantie) {
        		this.instantie = thisinstantie;
        	},

        	saveGroup() {
        		this.clickedOnce = true;
                var home = this;
                axios.post('/api/group', {
                        title: this.title,
                        instantie_id: 1,
                        districts: this.selecteddistricts,
                        scanmodel_id: 1,
                        inventarisatie_id: this.inventarisatie_id,
                    })
                    .then(function(response){
                        home.clickedOnce = false;
                        window.location.href = '/group/' + response.data.id + '/created'; 
                        // console.log( response.data )
                        // window.location.href = '/home'; 
                    })
                    .catch(function(error){
                        home.clickedOnce = false;
                        home.errors = error.response.data.errors;
                    })
        	},

            enterSearch() {
                alert('Klik op een van je zoekresultaten (in het rood) om hem toe te voegen aan je lijst van gemeenten. Je kan indien nodig daarna nog een gemeente zoeken en toevoegen.');
            }
        }
    }
</script>