<template>
	<span class="removemodal">
		<span class="card-closeicon">
		    <i class="material-icons clickable" data-toggle="modal" :data-target="'#removeModal-' + item_id"> close </i>
		</span>

		<div class="modal fade" :id="'removeModal-' + item_id" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="removeModalLabel">Verwijder {{ item_title }} </h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <p>Weet je zeker dat je <strong> {{ item_title }} </strong> wilt verwijderen?</p>
		            </div>
		            <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
						<button type="button" class="btn btn-primary" @click="$emit('input')" data-dismiss="modal">Verwijder</button>
		            </div>
		        </div>
		    </div>
		</div>
	</span>

</template>

<script>
    export default {
        props: [
        	'item_title',
        	'item_id'
        ],

        data() {
            return {
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        }
    }
</script>