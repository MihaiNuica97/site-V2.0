<template>
  <v-container class="content white--text mt-16">
    <vueper-slides
      class="slides-con ex--center-mode"
      :dragging-distance="50"
      :center-mode="true"
      :slide-ratio="9/16"
      :gap="10"
      arrows-outside
      bullets-outside
    >
      <vueper-slide v-for="(slide, i) in project.images" :image="slide" :key="i" />
    </vueper-slides>
    <v-container class="d-flex flex-wrap justify-center">
      <v-btn
        :href="project.details.live"
        class="action-btn primary v-size--x-large"
        v-if="project.details.live"
      >
        <v-icon class="mr-2">far fa-play-circle</v-icon>Live
      </v-btn>
      <v-btn
        :href="project.details.download"
        class="action-btn primary v-size--x-large"
        v-if="project.details.download"
      >
        <v-icon class="mr-2">fas fa-download</v-icon>Download
      </v-btn>
      <v-btn
        text
        :href="project.details.github"
        color="secondary "
        class="action-btn v-size--x-large"
        v-if="project.details.github"
      >
        <v-icon class="mr-2">fab fa-github</v-icon>Code
      </v-btn>
    </v-container>
    <v-container class="description">
      <p>{{project.details.text}}</p>
    </v-container>
    <v-container class="d-flex flex-wrap justify-center">
      <v-icon
        x-large
        color="primary lighten-1"
        class="tech-icons"
        v-for="(icon, i ) in project.details.techIcons"
        :key="i"
      >{{icon}}</v-icon>
    </v-container>
  </v-container>
</template>

<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
  props: {
    project: Object
  },
  components: { VueperSlides, VueperSlide }
};
</script>

<style>
.ex--center-mode {
  width: 1000px;
  max-width: 100%;
  margin: auto;
}
.slides-con {
  margin-top: 50px;
}
.action-btn {
  margin: 20px;
  margin-left: 50px;
  margin-right: 50px;
}
.description {
  width: 75%;
  max-width: 1000px;
}
.tech-icons {
  margin: 10px;
}
</style>