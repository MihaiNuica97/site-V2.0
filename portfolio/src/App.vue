<template>
  <v-app style="background: transparent;" id="background">
    <navbar/>
    <bg/>
    <router-view/>
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import Navbar from "@/components/Navbar.vue"
import Background from "@/components/Background.vue"

export default Vue.extend({
  name: "App",

  components: {
    'navbar' : Navbar,
    'bg': Background,
  },
  mounted: function() {
            this.$vuetify.theme.themes.light.primary = '#110825';
            this.$vuetify.theme.themes.light.secondary = '#4A2A92';
            this.$vuetify.theme.themes.light.accent = '#D00C7A';
            this.$vuetify.theme.themes.light.success = '#57E75D';
            this.$vuetify.theme.themes.light.info = '#9F0E5F';
            this.$vuetify.theme.themes.light.warning = '#FFA028';
            this.$vuetify.theme.themes.light.error = '#E32323';

            this.$vuetify.theme.themes.dark.primary = '#110825';
            this.$vuetify.theme.themes.dark.secondary = '#4A2A92';
            this.$vuetify.theme.themes.dark.accent = '#D00C7A';
            this.$vuetify.theme.themes.dark.success = '#57E75D';
            this.$vuetify.theme.themes.dark.info = '#9F0E5F';
            this.$vuetify.theme.themes.dark.warning = '#FFA028';
            this.$vuetify.theme.themes.dark.error = '#E32323';
        },
  data: () => ({
    //
  })
});
</script>
