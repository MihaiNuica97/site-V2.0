<template>
  <h1 class="white--text">{{name}}</h1>
</template>

<script>
export default {
  props: {
    name: String
  },
  mounted() {
    console.log(this.name);
    this.axios
      .post("http://www.mihainuica.com/getProjects.php", {
        name: this.name
      })
      .then(response => {
        console.log(response.data);
      });
  }
};
</script>

<style>
</style>