import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/components/Index'
import Main from '@/components/Main'
import LeftContent from '@/components/LeftContent'
import RightContent from '@/components/RightContent'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Index,
      children: [
        {
          path: '/',
          component: Main
        },
        {
          path: '/',
          component: LeftContent
        },
        {
          path: '/',
          component: RightContent
        }
      ]
    }
  ]
})
