<template>
	<v-app style="background: transparent;" id="background">
		<navbar />
		<bg />
		<router-view />
	</v-app>
</template>

<script lang="ts">
	import Vue from "vue";
	import Navbar from "@/components/Navbar.vue";
	import Background from "@/components/Background.vue";
	import "viewerjs/dist/viewer.css";
	import Viewer from "v-viewer";
	Vue.use(Viewer);
	export default Vue.extend({
		name: "App",

		components: {
			navbar: Navbar,
			bg: Background,
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
		}),
	});
</script>
