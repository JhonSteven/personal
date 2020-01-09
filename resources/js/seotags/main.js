require('./../bootstrap');
import Vue from 'vue'
import Resultados from './components/Resultados.vue'
import store from './store'
import moment from 'moment'

import VeeValidate from 'vee-validate';
const VueValidationEs = require('vee-validate/dist/locale/es');
Vue.use(VeeValidate, {
    locale: 'es',
    dictionary: {
        es: VueValidationEs
    },
    inject: true,
    fieldsBagName: 'veeFields',
    errorBagName: 'veeErrors'

});
Vue.use(VeeValidate);

/***** AXIOS */
import axios from 'axios';
window.axios = axios;
axios.defaults.baseURL = window.location.origin.replace(":8080", ":8000") + '/api/';

/*** FILTROS */
Vue.filter('uppercase', function(val) {
    if (val) {
        return val.toUpperCase();
    }
    return val;
})
Vue.filter('formatDate', function(val, formato = null) {
    if (!val) {
        return null;
    }
    moment.locale('es-do');
    var formatFecha = 'DD/MM/YYYY hh:mm a';
    if (formato != null) {
        formatFecha = formato;
    }
    return moment(val).format(formatFecha);
});


/**BOOTSTRAP 4 */
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)
    // import './assets/css/custom.scss'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);

Vue.prototype.$swalAlertError = function(title = null, error = null) {
    this.$swal({
        type: 'error',
        title: error && title ? title : '¡Ups!',
        text: error ? error : (title ? title : 'Ha ocurrido un error.'),
        timer: 5000,
    })
}

import VueMq from 'vue-mq'
Vue.use(VueMq, {
    breakpoints: {
        xs: 576,
        sm: 768,
        md: 992,
        lg: 1200,
        xl: Infinity,
    }
})

Vue.config.productionTip = false

Vue.component('resultados', Resultados);

new Vue({
    store,
    // render: h => h(App),
    el: '#parratags',
    data() {
        return {
            search: {
                termino: '',
                country: 'co'
            },
            urls: [],
            resultados: {
                termino: '',
                country: '',
                data: []
            },
            loading: false,
            progress: {
                total: 0,
                actual: 0,
                cancelar: false
            },
            pauseExecution: false,
            stopExecution: false
        }
    },
    computed: {
        barProgress() {
            return parseInt(this.progress.actual * 100 / this.progress.total);
        }
    },
    methods: {
        getURLs() {
            if (this.search.termino.length == 0) {
                alert('El término a buscar está vacío.');
            } else {
                this.loading = true;
                this.urls = [];
                this.resultados.termino = JSON.parse(JSON.stringify(this.search.termino));
                this.resultados.country = JSON.parse(JSON.stringify(this.search.country));
                this.resultados.data = [];
                this.progress.total = 0;
                this.progress.actual = 0;
                this.progress.cancelar = false;

                axios.get('parratags/get-urls', { params: { termino: this.search.termino, country: this.search.country } })
                    .then(response => {
                        this.loading = false;
                        if (response.data.urls) {
                            this.urls = response.data.urls;
                            this.progress.total = response.data.urls.length + 1;
                            this.progress.actual = 1;
                            this.getDataURL(0);
                        }
                    })
                    .catch(r => this.loading = false);
            }
        },
        getDataURL(position) {
            this.loading = true;
            axios.post('parratags/get-tags', { url: this.urls[position] })
                .then(response => {
                    this.loading = false;
                    if (response.data.etiquetas) {
                        this.resultados.data.push({ url: this.urls[position], data: response.data.etiquetas, time: response.data.time });
                        if (position < this.urls.length && !this.pauseExecution && !this.stopExecution) {
                            this.getDataURL(position + 1);
                        }
                    }
                })
                .catch(r => this.loading = false)
                .finally(r => {
                    if (this.progress.actual < this.progress.total) {
                        this.progress.actual++
                    } else {
                        this.search.termino = '';
                    }
                });

        },
        pause() {
            this.pauseExecution = true;
            this.stopExecution = false;
        },
        play() {
            this.pauseExecution = false;
            this.stopExecution = false;
            this.getDataURL(this.progress.actual - 1);
        },
        stop() {
            this.stopExecution = true;
            this.pauseExecution = false;
            this.progress.total = this.progress.actual;
        },
        cancel() {
            this.stopExecution = false;
            this.pauseExecution = false;
            this.urls = [];
            this.resultados = {
                termino: '',
                country: '',
                data: []
            };
            this.loading = false;
            this.progress = {
                total: 0,
                actual: 0,
                cancelar: false
            }
        }
    }
})

new Vue({
    el: '#menu',
    data() {
        return {
            showMenu: false
        }
    },
    methods: {
        toggleMenu() {
            this.showMenu = !this.showMenu;
        }
    }
})
