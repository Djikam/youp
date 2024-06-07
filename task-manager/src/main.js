import { createApp } from 'vue'

import App from './App.vue'
import './index.css'
import router from './router'
import axios from 'axios'


const app = createApp(App)
app.config.globalProperties.$axios = axios
app.use(router).mount('#app')

