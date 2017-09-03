<template>

	<div class="added-elements">

		<div v-for="(elem, index) in elements" :class="objectClass(elem.key)">
			<p class="text-center"><strong v-text="elem.name"></strong></p>

			<component-item
					:type="elem.key"
					:item="index"
					@delete="deleteItem"></component-item>
		</div>

	</div>

</template>

<script>

	import Selector from './Selector.vue';
	import ComponentItem from './Component.vue';

    export default {
        props: {
            'elements': Array
		},
		components: {
            Selector,
            ComponentItem,
		},
		methods: {
            objectClass(val) {
                return 'editor-component editor-component__' + val;
			},
			deleteItem(value) {
                this.elements.splice(value, 1);
			}
		}
    }

</script>