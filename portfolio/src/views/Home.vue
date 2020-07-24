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
      </v-container>-->

      <v-container class="d-flex flex-column flex-wrap align-center top-box">
        <h1 class="white--text ma-3 d-flex">Mihai Nuica</h1>
        <h3 class="grey--text d-flex text-center">Web Developer, UI/UX Designer, Software Developer</h3>
      </v-container>

      <v-container class="d-flex justify-center flex-wrap">
        <v-btn router :to="'/contact'" class="btn-big primary v-size--x-large">Contact me</v-btn>
        <v-btn
          router
          :to="'/projects'"
          text
          color="secondary"
          class="btn-big v-size--x-large"
        >My Projects</v-btn>
      </v-container>
      <v-container class="d-flex justify-center mt-auto mb-10 external-links">
        <v-hover v-for="link in links" v-bind:key="link.link" v-slot:default="{ hover }">
          <v-btn icon router :to="link.link">
            <v-icon
              x-large
              :elevation="hover ? 12 : 2"
              :color="hover ? 'primary' : 'white'"
            >{{ link.icon }}</v-icon>
          </v-btn>
        </v-hover>
      </v-container>
    </v-container>
  </v-main>
</template>

<script>
// @ is an alias to /src

export default {
  name: "Home",
  components: {},
  data() {
    return {
      links: [
        { icon: "fab fa-github", link: "/github" },
        { icon: "fab fa-instagram", link: "/instagram" },
        { icon: "fab fa-linkedin", link: "/linkedin" }
      ]
    };
  }
};
</script>

<style scoped>
.top-box {
  margin-top: 20vh;
}
.btn-big {
  margin: 10px;
}
.external-links a {
  margin: 30px;
}
.external-links {
}
@media screen and (max-height: 800px) {
  .top-box {
    margin-top: 10vh;
  }
}
</style>
