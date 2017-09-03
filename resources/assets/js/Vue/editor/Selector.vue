<template>

	<div class="add-element">
		<div class="icons">
			<i :class="iconClass" @click="showSelectorsMethod"></i>
			<i class="ion-trash-b icon-delete" v-if="is_child" @click="deleteElement"></i>
		</div>

		<div class="component-selector" v-show="showSelectors">
			<ul class="row align-center no-bullet">

				<li v-for="(elem, key) in elements" class="small-6 medium-4 large-3 column">
					<a href="#" @click.prevent="addComponent({'key': key, 'name': elem.name})">
						<i :class="elem.icon"></i>
						<p v-text="elem.name"></p>
					</a>
				</li>

			</ul>
		</div>
	</div>

</template>

<script>

	export default {
	    props: ['is_child'],
	    data() {
            return {
                iconClass: 'ion-ios-plus',
                showSelectors: false,
                elements: {
					'text': {
					    'name': 'Текст',
						'icon': 'ion-android-textsms'
					},
					'image': {
					    'name': 'Картинка',
						'icon': 'ion-image'
					},
					'list': {
					    'name': 'Список',
						'icon': 'ion-ios-list'
					},
                    'row': {
                        'name': 'Строка',
						'icon': 'ion-ios-barcode',
					},
                    'columns': {
                        'name': 'Колонка',
						'icon': 'ion-android-funnel',
					},
                    'button': {
                        'name': 'Кнопка',
						'icon': 'ion-android-checkbox-blank',
					},
                    'callout': {
                        'name': 'Выноска',
						'icon': 'ion-ios-redo'
					},
                    'menu': {
                        'name': 'Меню',
						'icon': 'ion-navicon'
					},
                },
			}
		},
		methods: {
	        addComponent(item) {
	            this.$emit('added', item);

                this.showSelectorsMethod();
			},
            showSelectorsMethod() {
                this.showSelectors = this.showSelectors == false ? true : false;

                this.iconClass = this.iconClass == 'ion-ios-plus' ? 'ion-ios-close' : 'ion-ios-plus';
            },
            deleteElement() {
	            this.$emit('delete');
			}
		},
	}

</script>