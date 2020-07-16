<template>
  <v-container class="white--text">
    <h1 class="white--text ma-3 d-flex">Mockups</h1>
    <h3
      class="grey--text ma-4 d-flex"
    >Here are some prototypes for various projects I have worked on:</h3>

    <div
      class="images gallery d-flex flex-wrap"
      v-viewer="{
				navbar: true,
				title: false,
				toolbar: false,
			}"
    >
      <div class="gallery-item" v-for="image in images" :key="image">
        <img :src="image" />
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    images: []
  }),
  created() {
    this.axios
      .get("http://www.mihainuica.com/getMockups.php")
      .then(response => {
        console.log(response.data);
        const baseLink = "http://www.mihainuica.com/mockups/";
        response.data.forEach(imgName => {
          const finalLink = baseLink + imgName;
          this.images.push(finalLink);
        });
        this.images.sort();
      });
  }
};
</script>

<style lang="scss">
.gallery-item {
  position: relative;
  width: calc(30% - 20px);
  margin: 10px;
  cursor: pointer;
  transition: all 700ms;
}
.gallery-item:hover {
  margin: 0;
  width: 30%;
}
.gallery img {
}

/* Create a pseudo element that uses padding-bottom to take up space */
.gallery-item::after {
  display: block;
  content: "";
  /* 16:9 aspect ratio */
  padding-bottom: 56.25%;
}

/* Image is positioned absolutely relative to the parent element */
.gallery-item img {
  /* Image should match parent box size */
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
@media screen and (max-width: 700px) {
  .gallery-item {
    width: calc(50% - 20px);
  }
  .gallery-item:hover {
    margin: 0;
    width: 50%;
  }
}
@media screen and (max-width: 350px) {
  .gallery-item {
    width: calc(100% - 20px);
  }
  .gallery-item:hover {
    margin: 0;
    width: 100%;
  }
}
</style>
