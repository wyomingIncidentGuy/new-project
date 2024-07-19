import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import HomeView from './views/HomeView.vue';

const router = createRouter({
    routes: [{
      path: '/',
      component: HomeView
    }],
    history: createWebHistory()
  })

const app = createApp(App)
app.use(router)
app.mount('#app')