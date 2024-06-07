<template>
  <nav
      class=" fixed z-50 duration-150  bg-white shadow-lg delay-150 text-blue-600 container sm:h-auto md:h-[5.3rem] py-3 px-6  flex justify-between items-center  min-w-full ">
      <div class="flex items-center">
          <div class=" flex items-center  ">
              <img class="h-10 w-10 rounded-full" src="/public/imgs/logo.png" alt="">
              <h1 class="text-xl font-bold">Task-<span class="text-blue-600 font-bold">Manager</span></h1>
          </div>
      </div>

      <div class="flex space-x-2 md:hidden right-1.5  cursor-pointer text-4xl items-center">
          <div @click="MenuOpen">
              <svg v-if="open == false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>

              <svg v-if="open == true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
          </div>



      </div>
      <ul :class="[open ? 'right-0' : 'right-[-100%]']"
          class="md:items-center md:flex  bg-white   md:px-3 px-10 md:pb-0 pb-2 md:static absolute sm:h-auto    md:w-auto w-full top-20 duration-200 ease-in">
          <li
              class="space-y-4 md:space-y-0 md:mx-4 md:my-0 my-6 z-50 space-x-4  md:flex grid grid-rows-6  flex-wrap items-center  ">
              <router-link
                  class="font-serif hover:font-bold hover:text-blue-400 md:text-black md:bg-transparent text-white  bg-blue-400 md:mx-0 mx-4   rounded-lg p-2 text-center"
                  to="/">Accueil</router-link>
            
              <router-link
                  class="font-serif hover:font-bold hover:text-blue-400 md:text-black md:bg-transparent text-white md:w-auto bg-blue-400 md:mx-0 w-[275px] rounded-lg p-2 text-center"
                  to="/navDash">mes Tasks</router-link>
                  <router-link
                  class="font-serif hover:font-bold hover:text-blue-400 md:text-black md:bg-transparent text-white md:w-auto bg-blue-400 md:mx-0 w-[275px] rounded-lg p-2 text-center"
                  to="/store">Ajouter une Task</router-link>
                 
                  <button @click="logout" v-if="auth == true"  class="h-10 md:w-24 text-center p-2  rounded-lg bg-blue-600 hover:bg-blue-800 font-thin w-[275px]  text-white ">
                deconnexion
                  </button>
              <router-link v-if="auth == false" to="/connexion" class="h-10 md:w-24 text-center p-2  rounded-lg bg-blue-600 hover:bg-blue-800 font-thin w-[275px]  text-white ">
                connexion
              </router-link>
              <div class="mr-10">
                  <router-link to="/register" v-if="auth == false"
                      class="h-10 md:w-24 text-center p-2  rounded-lg bg-blue-600 hover:bg-blue-800 font-thin w-[275px]  text-white ">s'engeristrer</router-link>
              </div>
              <btn class="hidden lg:block">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                  </svg>
              </btn>
      </li>
  </ul>
</nav>
<div class="p-10"></div>

<router-view name="one"></router-view></template>

<script>
import { ref } from 'vue'
export default {

  data() {
      return {

          isOpen: false,
          open: ref(false),
          hidden:false,

      }
  },

  methods: {
      MenuHide() {
          this.hidden = !this.hidden;
      },
      MenuOpen() {
          this.open = !this.open;
      },
  },

}
</script>