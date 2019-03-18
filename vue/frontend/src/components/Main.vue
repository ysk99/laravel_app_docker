<template>
  <div class="container-fluid mt-sm-2">
    <div class="row justify-content-center">
      <LeftContent></LeftContent>
      <CenterContent></CenterContent>
      <RightContent></RightContent>
    </div>
  </div>
</template>

<script>
import LeftContent from '@/components/LeftContent'
import RightContent from '@/components/RightContent'
import CenterContent from '@/components/CenterContent'

export default {
  name: 'Main',
  components: {
    LeftContent,
    CenterContent,
    RightContent
  }
}
</script>

<style scoped>

</style>
