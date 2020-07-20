<template>
  <v-container absolute class="d-sm-none ma-3">
    <v-icon
      x-large
      class="burger-icon white--text"
      :class="{open: drawer}"
      @click.stop="drawer = !drawer"
    >fas fa-bars</v-icon>
    <v-navigation-drawer v-model="drawer" color="bground" absolute right temporary>
      <v-list class="mt-16" dark>
        <v-list-item class="pl-6" v-for="link in links" :key="link.route" :to="link.route" link>
          <v-list-item-icon>
            <v-icon>{{link.icon}}</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>{{link.text}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      drawer: null,
      links: [
        { text: "Home", route: "/", icon: "fas fa-home" },
        { text: "Projects", route: "/projects", icon: "fas fa-folder-open" },
        { text: "Mockups", route: "/mockups", icon: "far fa-image" },
        { text: "Contact", route: "/contact", icon: "fas fa-envelope" }
      ]
    };
  }
};
</script>

<style scoped>
.burger-icon {
  z-index: 10;
  position: absolute;
  right: 16px;
}
.burger-icon.open {
  transform: rotate(90deg);
}
</style>