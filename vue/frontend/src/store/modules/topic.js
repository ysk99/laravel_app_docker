import axios from 'axios'

const topicModule = {
  namespaced: true,
  state: {
    topics: []
  },
  getters: {
    getTopics (state) {
      return state.topics
    }
  },
  mutations: {
    setTopics (state, payload) {
      state.topics = payload.topics
    }
  },
  actions: {
    async getTopicsAction (context) {
      const payload = {
        topics: []
      }
      await axios.get('http://localhost:8080/api/topic')
        .then((res) => {
          console.log(res)
          payload.topics = res.data
        })
      context.commit('setTopics', payload)
    },
    async createTopicAction (context, params) {
      await axios.post('http://localhost:8080/api/topic', params)
        .then((res) => {
        // this.getTopicsAction(context)
        })
    }
  }
}

export default topicModule
