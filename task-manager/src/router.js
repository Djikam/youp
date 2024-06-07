// src/router.js
import { createRouter, createWebHistory } from 'vue-router'
//import Home from './views/Home.vue'
import LoginView from './components/auth/LoginView.vue'
import RegisterView from './components/auth/RegisterView.vue'
import NavVue from './components/home/Nav.vue'
import StoreTask from './components/task/StoreTask.vue'
import HomeView from './components/home/HomeView.vue'

const routes = [
//   {
//     path: '/',
//     name: 'Home',
//     component: Home,
//   },
  // Ajoutez vos routes ici

  
  {
    path: '/',
    component: NavVue,
    children: [
      {
        path: '/',
        components: {
          default: NavVue,
          one: HomeView
        }
      },
      {
        path: '/register',
        components: {
          default: NavVue,
          one: RegisterView
        }
      },
      {
        path: '/store',
        components: {
          default: NavVue,
          one: StoreTask
        }
      },
      {
        path: '/connexion',
        components: {
          default: NavVue,
          one: LoginView
        }
      },
    
    ]
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
