<template>
  <v-container dark class="d-flex flex-column align-center white--text page-con">
    <v-container class="d-flex flex-column align-center white--text page-con">
      <h1 class="white--text ma-3 d-flex">Contact</h1>
      <h3 class="grey--text ma-4 d-flex">Shoot me an email!</h3>
    </v-container>

    <v-container class="contact-form text-center">
      <v-form>
        <v-text-field
          dark
          v-model="name"
          :error-messages="nameErrors"
          label="Name"
          required
          @input="$v.name.$touch()"
          @blur="$v.name.$touch()"
        ></v-text-field>
        <v-text-field
          dark
          v-model="email"
          :error-messages="emailErrors"
          label="E-mail"
          @input="$v.email.$touch()"
          @blur="$v.email.$touch()"
        ></v-text-field>
        <v-text-field
          dark
          v-model="subject"
          :error-messages="subjectErrors"
          label="Subject"
          required
          @input="$v.subject.$touch()"
          @blur="$v.subject.$touch()"
        ></v-text-field>
        <v-textarea dark v-model="message" name="input-7-1" label="Message" hint="Hint text"></v-textarea>
        <v-btn class="btn-big primary v-size--x-large mt-10" @click="submit">Send</v-btn>
      </v-form>
    </v-container>
  </v-container>
</template>

<script>
import { validationMixin } from "vuelidate";
import { required, email } from "vuelidate/lib/validators";
export default {
  mixins: [validationMixin],
  validations: {
    name: { required },
    email: { email },
    subject: { required }
  },
  data: () => ({
    name: "",
    email: "",
    subject: "",
    message: ""
  }),
  computed: {
    nameErrors() {
      const errors = [];
      if (!this.$v.name.$dirty) return errors;
      !this.$v.name.required && errors.push("Name is required.");
      return errors;
    },
    emailErrors() {
      const errors = [];
      if (!this.$v.email.$dirty) return errors;
      !this.$v.email.email && errors.push("Please enter a valid email");
      return errors;
    },
    subjectErrors() {
      const errors = [];
      if (!this.$v.subject.$dirty) return errors;
      !this.$v.subject.required && errors.push("Subject is required");
      return errors;
    }
  },
  methods: {
    submit() {
      this.$v.$touch();
      const email = {
        name: this.name,
        email: this.email,
        subject: this.subject,
        message: this.message
      };
      if (this.$v.$invalid) {
        console.log("ERROR");
      } else {
        console.log(email);
        this.axios
          .post("http://www.mihainuica.com/mail.php", {
            name: this.name,
            email: this.email,
            subject: this.subject,
            message: this.message
          })
          .then(response => {
            console.log(response);
          });
      }
    }
  }
};
</script>

<style>
.contact-form {
  width: 75%;
  max-width: 700px;
}
.page-con {
  margin-top: 20px;
}
</style>