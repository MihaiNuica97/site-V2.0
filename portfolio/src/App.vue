<template>
  <v-app style="background: transparent;" id="background">
    <navbar />
    <mobile />
    <bg />
    <router-view class="mt-n6 mt-sm-10" />
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import Navbar from "@/components/Navbar.vue";
import Background from "@/components/Background.vue";
import MobileNav from "@/components/MobileNav.vue";
import "viewerjs/dist/viewer.css";
import Viewer from "v-viewer";
Vue.use(Viewer);
export default Vue.extend({
  name: "App",

  components: {
    navbar: Navbar,
    bg: Background,
    mobile: MobileNav
  },
  mounted: function() {
    this.$vuetify.theme.themes.light.primary = "#D00C7A";
    this.$vuetify.theme.themes.light.secondary = "#FF8DB1";
    this.$vuetify.theme.themes.light.accent = "#2F021B";
    this.$vuetify.theme.themes.light.success = "#57E75D";
    this.$vuetify.theme.themes.light.info = "#2196F3";
    this.$vuetify.theme.themes.light.warning = "#FFA028";
    this.$vuetify.theme.themes.light.error = "#E32323";
    this.$vuetify.theme.themes.light.bground = "#100824";

    this.$vuetify.theme.themes.dark.primary = "#D00C7A";
    this.$vuetify.theme.themes.dark.secondary = "#FF8DB1";
    this.$vuetify.theme.themes.dark.accent = "#2F021B";
    this.$vuetify.theme.themes.dark.success = "#57E75D";
    this.$vuetify.theme.themes.dark.info = "#2196F3";
    this.$vuetify.theme.themes.dark.warning = "#FFA028";
    this.$vuetify.theme.themes.dark.error = "#E32323";
    this.$vuetify.theme.themes.dark.bground = "#100824";
  },
  data: () => ({
    //
  })
});
</script>

<style>
body {
  overflow-x: hidden;
}
</style>
