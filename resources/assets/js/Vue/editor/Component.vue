<template>

	<div>
		<template v-if="type == 'text'">
			<textarea rows="4" v-model="model"></textarea>
		</template>

		<template v-else-if="type == 'image'">
			<picture-input
					ref="pictureInput"
					@change="onChange"
					width="600"
					height="600"
					margin="16"
					accept="image/jpeg,image/png"
					size="10"
					buttonClass="button"
					:customStrings="{ drag: 'Перетащите изображение сюда', change: 'Изменить фото' }">
			</picture-input>
		</template>

		<selector :is_child="true" @delete="thisDelete"></selector>
	</div>

</template>

<script>

    import Selector from './Selector.vue';
    import PictureInput from 'vue-picture-input';

    export default {
        data() {
            return {
                atts: {},
                model: '',
            }
        },
        components: {
            Selector,
            PictureInput,
        },
        props: ['type', 'item'],
        mounted() {
            this.createContentType(this.type);
        },
        methods: {
            createContentType(type) {
                if (type == 'text') {
                    this.atts = {
                        'class': 'text-input',
                    }
                } else if (type == 'image') {
//                    this.atts = {
//
//					}
                }
            },
            thisDelete() {
                this.$emit('delete', this.item);
            },
            onChange() {
                if (this.$refs.pictureInput.image) {
                    console.log('Picture loaded.')
                } else {
                    console.log('FileReader API not supported: use the <form>, Luke!')
                }
            }
        },
    }

</script>