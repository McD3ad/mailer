<template>

	<div class="editor-constructor">
		<selector @added="onElementAdded" :is_child="false"></selector>

		<components :elements="elems"></components>
	</div>

</template>

<script>

	import Selector from './Selector.vue';
	import Components from './Components.vue';

	export default {
	    data() {
	        return {
				elems: [],
			}
		},
		components: {
            Selector,
	        Components
		},
		methods: {
            onElementAdded(value) {
                this.elems.push(value);
			},
		}
	}

</script>