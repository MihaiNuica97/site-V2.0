<template>
  
    <v-main>
    <div class="hello">
          <v-btn color="primary">primary</v-btn>
          <v-btn color="secondary">secondary</v-btn>
          <v-btn color="error">Error</v-btn>
          <v-btn color="warning">Warning</v-btn>
          <v-btn color="info">Info</v-btn>
          <v-btn color="success">success</v-btn>
          

      </div>
  </v-main>
  
  

</template>

<script>
// @ is an alias to /src

export default {
  name: "Home",
  components: {
  }
};
</script>

<style scoped>
  div{
    color: var(--v-primary-base);
    text-align: center;
  }
</style>