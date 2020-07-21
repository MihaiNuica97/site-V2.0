import Vue from "vue";
import VueRouter, { RouteConfig } from "vue-router";
import Home from "../views/Home.vue";
import Projects from "../views/Projects.vue";
import Mockups from "../views/Mockups.vue";
import Contact from "../views/Contact.vue";
import ExtendedProjects from "../views/ExtendedProjects.vue";

Vue.use(VueRouter);

const routes: Array<RouteConfig> = [
	{
		path: "/",
		name: "Home",
		component: Home,
	},
	{
		path: "/projects",
		name: "Projects",
		component: Projects,
	},
	{
		path: "/projects/:name",
		name: "ExtendedProjects",
		component: ExtendedProjects,
		props: true,
	},
	{
		path: "/mockups",
		name: "Mockups",
		component: Mockups,
	},
	{
		path: "/contact",
		name: "Contact",
		component: Contact,
	},
	{
		path: "/github",
		beforeEnter() {
			location.href = "https://github.com/MihaiNuica97";
		},
	},
	{
		path: "/linkedin",
		beforeEnter() {
			location.href = "http://linkedin.com";
		},
	},
	{
		path: "/instagram",
		beforeEnter() {
			location.href = "https://www.instagram.com/mihai.nuica/";
		},
	},
];

const router = new VueRouter({
	mode: "history",
	base: process.env.BASE_URL,
	routes,
});

export default router;
