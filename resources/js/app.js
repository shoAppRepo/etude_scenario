import Vue from 'vue'
import router from './router.js'
import axios from 'axios'
import jQuery from 'jquery'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import  TopPage from './components/page/TopPage'

window.$ = window.jQuery = jQuery;

require('bootstrap');

Vue.prototype.$http = axios;

new Vue({
    router:router,
    components: {
      app:TopPage
    }
  }).$mount('#app')