console.clear();
const app = Vue.createApp({
	data: function () {
  	return {
    	blur: 0,
      sepia: 0,
      rotate: 0,
    };
  },
  computed: {
    blurry: function () {
      return 'blur(' + (this.blur / 10) + 'px)';
    },
    sepias: function () {
      return 'sepia(' + (this.sepia) + '%)';
    },
    filters: function () {
      return 'filter: blurry + ',' + sepias'
    },
    transforms: function () {
      return 'transform: rotate(' + (this.rotate) + 'deg)';
    },
    styles: function () {
      return [
        'filter: ' + this.blurry + ' ' + this.sepias,
        this.filters,
        this.transforms
      ].join(';');
    }
  }
}).mount('#app');