import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios';

const app = createApp(App)

axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000',
});

app.config.globalProperties.axios = api;

app.use(router)
app.mount('#app')
