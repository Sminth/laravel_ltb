import Vue from 'vue'
import store from './store/index'
import router from './router.js'
import swal from 'sweetalert'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/fr'
import 'element-ui/lib/theme-chalk/index.css';
import VueCurrencyFilter from 'vue-currency-filter'
import * as filters from './filters'; // global filters

// register global utility filters.
Object.keys(filters).forEach(key => {
    Vue.filter(key, filters[key]);
});



Vue.use(VueCurrencyFilter,
    {
        symbol: 'FCFA',
        thousandsSeparator: '.',
        fractionCount: 0,
        fractionSeparator: '.',
        symbolPosition: 'after',
        symbolSpacing: true
    }
);

Vue.use(ElementUI,{locale});

const app = new Vue({
    router,
    swal,
    store
}).$mount('#app');
