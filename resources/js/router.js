import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/page/Home'
import Register from './components/page/Register'
import Login from './components/page/Login'
import Scenario from './components/layouts/scenario'
import Mode from './components/page/mode'
import AllSelect from './components/page/allSelect'


Vue.use(Router)

export default new Router({
  mode: 'history', 
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home 
    },
    {
        path: '/register',
        name: 'register',
        component: Register 
      },
      {
        path: '/login',
        name: 'login',
        component: Login 
      },
      {
        path: '/scenario',
        name: 'scenario',
        component: Scenario 
      },
      {
        path: '/mode',
        name: 'mode',
        component: Mode 
      },
      {
        path: '/allSelect',
        name: 'allSelect',
        component: AllSelect 
      },
  ]
});