<template>
  <div id="bg-outer">
      <img id="bg-img">
      <div id="bg-overlay"></div>
  </div>
</template>

<script>
export default {
    name: "Background"
}
</script>

<style>
    #bg-outer{
        /* z-index: -2; 
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        background: url('../assets/bg-rain-window.jpg') no-repeat center center;
        background-size: cover; */
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        z-index: -2;
    }
    #bg-overlay{
        z-index: -1;
        width: 100%;
        height: 100%;
        background: gray;
        opacity: 0.1;
    }
    #bg-img{
        height: 100%;
        width: 100%;
        content: url('../assets/bg-stripes-purple.jpg');
    }
    @media screen and (max-width: 700px){
        #bg-img{
            content: url('../assets/bg-stripes-mobile-purple.jpg');
        }
    }
</style>