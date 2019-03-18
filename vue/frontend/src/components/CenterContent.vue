<template>
  <div class="col-md-6">
    <div class='topics'>
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <form>
          <div class="form-group">
            <textarea class="form-control" v-model="addTopic" name="addTopic" placeholder="聞いてみる" rows="2"></textarea>
          </div>
          <div class="form-group text-right">
            <button type="submit" v-on:click="createTopic" class="btn btn-primary pull-right">質問</button>
          </div>
        </form>
      </div>
    </div>
    <div class='topics'>
      <div v-for="topic in getTopics" :key="topic.id">
        <transition>
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
          <div class="media">
            <img class="align-self-start mr-3 rounded" src="../assets/no_user.png" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">{{topic.content}}</h5>
              <p>hoge</p>
              <i class="fas fa-heart"></i>
              {{ topic.Timestamp | moment("from", "now")}}
            </div>
          </div>
        </div>
        </transition>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex'

const moduleName = 'topicModule'

export default {
  name: 'CenterContent',
  data: function () {
    return {
      addTopic: ''
    }
  },
  mounted () {
    this.load()
  },
  computed: {
    ...mapState(moduleName, [
      'topics'
    ]),
    ...mapGetters(moduleName, [
      'getTopics'
    ])
  },
  methods: {
    ...mapActions(moduleName, [
      'getTopicsAction',
      'createTopicAction'
    ]),
    // ...mapMutations(moduleName, [
    //  'setTopics'
    // ]),
    load () {
      this.getTopicsAction().then(() => {
      }).catch(err => {
        console.log(err)
      })
    },
    createTopic: function () {
      var params = new URLSearchParams()
      params.append('Topic', this.addTopic)
      this.createTopicAction(params).then(res => {
        console.log(res)
      }).catch(err => {
        console.log(err)
      })
    }
  }
}
</script>

<style scoped>

</style>
