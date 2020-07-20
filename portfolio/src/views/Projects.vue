<template>
  <v-container class="mt-16">
    <v-hover v-slot:default="{ hover }">
      <v-card to="/" link dark class="bground lighten-1" max-width="500px" elevation="24">
        <v-expand-transition>
          <div
            v-if="hover"
            class="d-flex transition-fast-in-fast-out primary darken-2 v-card--reveal display-3 white--text"
            style="height: 100%;"
          >
            <v-icon x-large>fas fa-plus</v-icon>
          </div>
        </v-expand-transition>
        <v-img height="200px" src="http://www.mihainuica.com/projects/marigold-title.png"></v-img>
        <v-card-title>Marigold</v-card-title>
        <v-card-subtitle>Beauty salon</v-card-subtitle>
        <v-card-text>A responsive website complete with iFrames, a contact form and automatic mailing list subscription</v-card-text>
      </v-card>
    </v-hover>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      // hover: null
    };
  }
};
</script>

<style scoped>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.3;
  position: absolute;
  width: 100%;
  z-index: 8;
}
</style>