<template>
	<div>
		<v-app-bar dark class="elevation-0" style="background: transparent">
			<v-tabs right dark class="mr-16" slider-color="accent" >
				<v-tab v-for="link in links" v-bind:key="link.text" router :to="link.route" >{{link.text}}</v-tab>
			</v-tabs>
			<div>
			</div>
		</v-app-bar>
	</div>

</template>

<script>
export default {
	name:"Navbar",
	data(){
		return {
			links: [
				{text: "Home", route:'/'},
				{text: "Projects", route:'/projects'},
				{text: "Mockups", route:'/mockups'},
				{text: "Contact", route:'/contact'},
			]
		}
	}
}
</script>

<style scoped>

</style>