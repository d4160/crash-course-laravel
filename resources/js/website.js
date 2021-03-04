require('./bootstrap');

import ContactForm from '../components/ContactForm.vue'

// import Vue from 'vue'
// import axios from 'axios'
// import VueAxios from 'vue-axios'

// const app = Vue.createApp(ContactForm)
// app.use(VueAxios, axios)
// app.mount('#contact-form')

import { createApp } from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

// const app = createApp(ContactForm)
// app.use(VueAxios, axios) // 👈
// app.mount('#contact-form')

createApp(ContactForm).use(VueAxios, axios).mount('#contact-form')

// const app = createApp(ContactForm).mount("#contact-form")
// app.use(VueAxios, axios)
