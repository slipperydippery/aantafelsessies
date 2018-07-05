<template>
	<i class="material-icons clickable"
		v-clipboard:copy="copy_content"
    	v-clipboard:success="onCopy"
    	data-toggle="tooltip" 
    	data-placement="top" 
    	:title="status"
	> file_copy </i> 
</template>

<script>
    import VueClipboard from 'vue-clipboard2'
    Vue.use(VueClipboard);

    export default {
        props: [
        	'copy_content'
        ],

        data() {
            return {
            	status: ''
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        	onCopy() {
        		this.status='Gekopieerd naar het klembord!'
        	}
        }
    }
</script>