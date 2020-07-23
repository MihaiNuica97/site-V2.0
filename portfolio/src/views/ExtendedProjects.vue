<template>
  <project :project="project" />
</template>

<script>
import Project from "@/components/Project.vue";
export default {
  props: {
    name: String
  },
  components: {
    project: Project
  },
  data() {
    return {
      project: {
        images: null,
        details: { title: null }
      }
    };
  },
  mounted() {
    const baseURL = "http://www.mihainuica.com/projects/" + this.name + "/";
    const imgs = [];
    this.axios
      .post("http://www.mihainuica.com/getProjects.php", {
        name: this.name
      })
      .then(response => {
        response.data.images.forEach(imgName => {
          const imgURL = baseURL + imgName;
          imgs.push(imgURL);
        });
        imgs.sort();
        this.project = {
          images: imgs,
          details: response.data.details
        };
        console.log(this.project);
      });
  }
};
</script>

<style>
</style>