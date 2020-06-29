import Vue from "vue";
import Vuetify from "vuetify/lib";

Vue.use(Vuetify, {
    theme: {
        themes: {
            light: {
                primary: '#110825',
                accent: '#D00C7A',
                secondary: '#4A2A92',
                success: '#57E75D',
                info: '#9F0E5F',
                warning: '#FFA028',
                error: '#E32323'
            },
            dark:{
                primary: '#110825',
                accent: '#D00C7A',
                secondary: '#4A2A92',
                success: '#57E75D',
                info: '#9F0E5F',
                warning: '#FFA028',
                error: '#E32323'
            }
        }
      },
  });

export default new Vuetify({});
