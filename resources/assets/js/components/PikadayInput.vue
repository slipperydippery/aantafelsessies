<template>
	<input 
		:value="value" 
		type="text"
		class="form-input"
		ref="input"
	>

</template>

<script>
    import Pikaday from 'pikaday';
    var moment = require('moment');

    export default {
    	components: {},
        props: {
        	value: { required: true },
            format: { default: 'YYYY-MM-DD' },
            options: { default: {} },
        },

        data() {
            return {
            }
        },

        mounted() {
        	const picker = new Pikaday({
                field: this.$refs.input,
                bound: false,
                format: this.format,
                onSelect: () => {
                    this.$emit('input', picker.toString())
                },
                i18n: {
                    previousMonth   : 'Vorige maand',
                    nextMonth       : 'Volgende maand',
                    months          : [ 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december' ],
                    monthsShort     : [ 'jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec' ],
                    weekdays        : [ 'zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag' ],
                    weekdaysShort   : [ 'zo', 'ma', 'di', 'wo', 'do', 'vr', 'za' ],
                },
                firstDay: 1,
                minDate: moment().toDate(),
                ...this.options,  
            });
            picker.show()

        },

        computed: {
        },

        methods: {
        }
    }
</script>

<style>
    .pika-single {
        font-family: "Raleway", sans-serif;
    },

    button.pika-day {
        background: white;
    }

    .pika-select-month .option{
        font-weight: 100;
        font-family: 'Oswald';
    }
</style>