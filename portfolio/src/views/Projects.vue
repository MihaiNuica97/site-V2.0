<template>
  <v-container class="d-flex flex-column justify-center mb-lg-16 projects-con">
    <h1 class="white--text ma-3 d-flex">Projects</h1>
    <h3 class="grey--text ma-4 d-flex">Here are some of my completed projects:</h3>

    <v-slide-group :show-arrows="true" dark>
      <v-hover v-for="card in cards" :key="card.title" v-slot:default="{ hover }">
        <v-card
          :to="card.link"
          link
          dark
          class="bground lighten-1 project-card"
          width="60vw"
          max-width="400px"
          elevation="24"
        >
          <v-expand-transition>
            <div
              v-if="hover"
              class="d-flex transition-fast-in-fast-out primary darken-2 v-card--reveal display-3 white--text"
              style="height: 100%;"
            >
              <v-icon x-large>fas fa-plus</v-icon>
            </div>
          </v-expand-transition>
          <v-img height="200px" :src="card.img"></v-img>
          <v-card-title>{{card.title}}</v-card-title>
          <v-card-subtitle>{{card.subtitle}}</v-card-subtitle>
          <v-card-text>{{card.text}}</v-card-text>
        </v-card>
      </v-hover>
    </v-slide-group>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      cards: []
    };
  },
  created() {
    this.axios
      .get("http://www.mihainuica.com/getProjectCards.php")
      .then(response => {
        const baseLink = "http://www.mihainuica.com/projects/";
        response.data.forEach(card => {
          const finalLink = baseLink + card.img;
          card.img = finalLink;
          this.cards.push(card);
        });
      });
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
  z-index: 4;
}
.project-card {
  width: 50%;
  margin: 30px;
}
.projects-con {
  height: 100%;
}
</style>