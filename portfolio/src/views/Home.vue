<template>
  
    <v-main>
      <v-container class="d-flex flex-column justify-start align-center fill-height">
        <!-- <v-container class="d-flex justify-space-between flex-wrap">
            <v-btn color="primary">primary</v-btn>
            <v-btn color="secondary">secondary</v-btn>
            <v-btn color="error">Error</v-btn>
            <v-btn color="warning">Warning</v-btn>
            <v-btn color="info">Info</v-btn>
            <v-btn color="success">success</v-btn>
        </v-container> -->

        <v-container class="d-flex flex-column flex-wrap align-center top-box" >
          <h1 class="white--text ma-3 d-flex">Mihai Nuica</h1>
          <h3 class="grey--text d-flex text-center">Web developer, UI/UX designer, software developer</h3>
        </v-container>

        <v-container class="d-flex justify-center flex-wrap">
            <v-btn router :to="'/contact'" class="btn-big primary v-size--x-large">Contact me</v-btn>  
            <v-btn router :to="'/projects'" text color="secondary" class="btn-big v-size--x-large">My Projects</v-btn>  
        </v-container>
        <v-container>
          <v-icon>mdi-Linkedin</v-icon>
        </v-container>
      </v-container>
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
  .top-box{
    margin-top: 10%;
  }
  .btn-big{
    margin: 10px;
  }
</style>