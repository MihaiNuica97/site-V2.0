<template>
  <div class="home">
    <bg/>
    <div><span>Hello World!</span></div>
  </div>
</template>

<script>
// @ is an alias to /src
import Background from "@/components/Background.vue"

export default {
  name: "Home",
  components: {
    'bg': Background
  }
};
</script>

<style scoped>
  div{
    color: white;
    text-align: center;
  }
</style>