<template>
  <div>
      <img src="@/assets/bg-rain-window.jpg" alt="">
  </div>
</template>

<script>
export default {
    name: "Background"
}
</script>

<style scoped>
    div{
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }
    img{
        width: 100%;
        height: 100%;
    }
    body{
        color: transparent;
    }
</style>