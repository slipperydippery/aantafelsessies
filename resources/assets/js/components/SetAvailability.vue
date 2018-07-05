<template>
	<div class="row row__choice">
		<div class="">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="241.096px" height="241.096px" viewBox="0 0 241.096 241.096" style="enable-background:new 0 0 241.096 241.096;" xml:space="preserve"
				@click="setAvailable('yes')"
				class="yes" 
				:class="{active: value.available == 'yes'}"
			>
				<path class="dominant" style="fill:#FFFFFF;" d="M120.548,8C58.489,8,8,58.489,8,120.548c0,62.058,50.488,112.548,112.548,112.548
					c62.059,0,112.548-50.49,112.548-112.548C233.096,58.489,182.607,8,120.548,8z"/>
				<path class="dominant simple" style="fill:#959595;" d="M120.548,0C53.971,0,0,53.971,0,120.548c0,66.576,53.971,120.547,120.548,120.547
					s120.548-53.972,120.548-120.547C241.096,53.971,187.125,0,120.548,0z M120.548,233.096C58.489,233.096,8,182.606,8,120.548
					C8,58.489,58.489,8,120.548,8c62.059,0,112.548,50.488,112.548,112.548C233.096,182.606,182.607,233.096,120.548,233.096z"/>
				<path class="clear simple" style="fill:#959595;" d="M87.691,189.796c-1.024,0-2.047-0.391-2.829-1.172c-1.562-1.562-1.562-4.095,0-5.656L201.099,66.732
					c1.561-1.562,4.094-1.562,5.656,0c1.563,1.563,1.563,4.095,0,5.657L90.519,188.624C89.738,189.406,88.714,189.796,87.691,189.796z"
					/>
				<path class="clear simple" style="fill:#959595;" d="M87.254,189.7c-1.024,0-2.047-0.391-2.829-1.172l-55.961-55.963c-1.562-1.562-1.562-4.095,0-5.656
					c1.563-1.562,4.096-1.562,5.657,0l55.961,55.963c1.562,1.562,1.562,4.095,0,5.656C89.302,189.31,88.278,189.7,87.254,189.7z"/>
			</svg>
		</div>
		<div class="">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="241.096px" height="241.096px" viewBox="0 0 241.096 241.096" style="enable-background:new 0 0 241.096 241.096;" xml:space="preserve"
				class="maeby"
				@click="setAvailable('maeby')"
				:class="{active: value.available == 'maeby'}"
			>
				<path class="dominant" style="fill:#FFFFFF;" d="M120.548,8C58.489,8,8,58.489,8,120.548c0,62.058,50.488,112.548,112.548,112.548
					c62.059,0,112.548-50.49,112.548-112.548C233.096,58.489,182.607,8,120.548,8z"/>
				<path class="clear simple" style="fill:#959595;" d="M203.438,124.548H39.055c-2.209,0-4-1.791-4-4s1.791-4,4-4h164.383c2.209,0,4,1.791,4,4
					S205.647,124.548,203.438,124.548z"/>
				<path class="dominant simple" style="fill:#959595;" d="M120.548,0C53.971,0,0,53.971,0,120.548c0,66.576,53.971,120.547,120.548,120.547
					s120.548-53.972,120.548-120.547C241.096,53.971,187.125,0,120.548,0z M120.548,233.096C58.489,233.096,8,182.606,8,120.548
					C8,58.489,58.489,8,120.548,8c62.059,0,112.548,50.488,112.548,112.548C233.096,182.606,182.607,233.096,120.548,233.096z"/>
			</svg>
		</div>
		<div class="">
			<svg version="1.1" id="no" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="241.096px" height="241.096px" viewBox="0 0 241.096 241.096" style="enable-background:new 0 0 241.096 241.096;" xml:space="preserve"
				class="no" 
				@click="setAvailable('no')"
				:class="{active: value.available == 'no'}"
			>
				<path class="dominant" style="fill:#FFFFFF;" d="M120.548,8C58.488,8,8,58.488,8,120.548c0,62.058,50.488,112.548,112.548,112.548
					c62.059,0,112.548-50.49,112.548-112.548C233.096,58.488,182.606,8,120.548,8z"/>
				<path class="dominant simple" style="fill:#959595;" d="M120.548,0C53.971,0,0,53.971,0,120.548c0,66.576,53.971,120.547,120.548,120.547
					s120.548-53.972,120.548-120.547C241.096,53.971,187.125,0,120.548,0z M120.548,233.096C58.489,233.096,8,182.606,8,120.548
					C8,58.489,58.489,8,120.548,8s112.548,50.489,112.548,112.548C233.096,182.606,182.607,233.096,120.548,233.096z"/>
				<path class="clear simple" style="fill:#959595;" d="M62.663,182.666c-1.024,0-2.047-0.391-2.829-1.172c-1.562-1.562-1.562-4.095,0-5.656L176.07,59.602
					c1.563-1.562,4.096-1.561,5.657,0c1.562,1.563,1.562,4.095,0,5.657L65.491,181.494C64.71,182.275,63.687,182.666,62.663,182.666z"/>
				<path class="clear simple" style="fill:#959595;" d="M179.131,182.666c-1.024,0-2.047-0.391-2.829-1.172L60.068,65.259c-1.562-1.563-1.562-4.095,0-5.657
					c1.563-1.562,4.095-1.561,5.657,0l116.234,116.236c1.562,1.562,1.562,4.095,0,5.656
					C181.178,182.275,180.154,182.666,179.131,182.666z"/>
			</svg>
		</div>
	</div>
</template>

<script>
    export default {
        props: [
	        'value'
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

        	updateAvailability() {
        		axios.post('/api/availability/' + this.value.id + '/update', {
	        			availability: this.value
	        		})
        	},

        	setAvailable(availability) {
        		this.value.available = availability;
        		this.$emit('input', this.value);
        		this.updateAvailability();
        	}
        }
    }
</script>