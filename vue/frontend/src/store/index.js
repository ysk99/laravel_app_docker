import Vue from 'vue'
import Vuex from 'vuex'
// modules
import topicModule from './modules/topic'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    topicModule
  }
})

export default store
