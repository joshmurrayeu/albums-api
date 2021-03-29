// Set-up axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Set-up vue
import Vue from 'vue'
import components from './components'

const app = new Vue({
    el: '#app',
    components: components
});
