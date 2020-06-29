import Vue from "vue";
import VueRouter, { RouteConfig } from "vue-router";
import Home from "../views/Home.vue";
import Projects from "../views/Projects.vue";
import Mockups from "../views/Mockups.vue";
import Contact from "../views/Contact.vue";

Vue.use(VueRouter);

const routes: Array<RouteConfig> = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/projects",
    name: "Projects",
    component: Projects
  },
  {
    path: "/mockups",
    name: "Mockups",
    component: Mockups
  },
  {
    path: "/contact",
    name: "Contact",
    component: Contact
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

export default router;
