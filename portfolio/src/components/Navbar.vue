<template>
  <div class="d-none d-sm-block">
    <v-app-bar dark fixed class="elevation-0" style="background: #100824">
      <v-tabs right dark class slider-color="primary">
        <v-tab v-for="link in links" v-bind:key="link.text" router :to="link.route">{{link.text}}</v-tab>
      </v-tabs>
      <div></div>
    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  data() {
    return {
      links: [
        { text: "Home", route: "/" },
        { text: "Projects", route: "/projects" },
        { text: "Mockups", route: "/mockups" },
        { text: "Contact", route: "/contact" }
      ]
    };
  }
};
</script>

<style scoped>
</style>