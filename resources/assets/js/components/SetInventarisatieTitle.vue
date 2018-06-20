<template>
	<div class="section__prepanel">
        <span>Selectiehulp:</span> <span class="clickable" v-if="! editable" @click="editable = true"><strong>{{ inventarisatie.title }}</strong></span>
        <input type="text" v-model="inventarisatie.title" v-else @keyup.enter="saveTitle()">
        <i class="material-icons clickable" v-if="! editable" @click="editable = true"> edit </i>
        <i class="material-icons clickable" v-if="editable" @click="saveTitle()"> save </i>
        <i class="material-icons clickable" v-if="! editable" data-toggle="modal" data-target="#exampleModal"> close </i>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Weet je het zeker?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Weet je zeker dat je deze selectie gesprekspartners wilt verwijderen?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                        <a :href="'/inventarisatie/' + inventarisatie_id + '/destroy'" class="btn btn-danger">Verwijder</a>
                    </div>
                </div>
            </div>
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
            	'inventarisatie': {},
                'editable': false,
            }
        },

        mounted() {
        	this.getInventarisatie();
        },

        computed: {
        },

        methods: {
        	getInventarisatie() {
        		var home = this;
        		axios.get('/api/inventarisatie/' + this.inventarisatie_id)
	        		.then(function(response){
	        			home.inventarisatie = response.data;
	        		})
        	},

            saveTitle() {
                var home = this;
                axios.post('/api/inventarisatie/' + home.inventarisatie.id, {
                    'inventarisatie': home.inventarisatie
                });
                this.editable = false;
            }
        }
    }
</script>