/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("jquery-validation");

window.Vue = require("vue");
import Vue from "vue";
import { ValidationProvider, extend } from "vee-validate";
import { configure } from "vee-validate";
import { required, email, min } from "vee-validate/dist/rules";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const config = {
    useConstraintAttrs: true
};

// Sets the options.
configure(config);
extend("strongPassword", {
    validate: value => {
        let strongRegex = new RegExp(
            "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})"
        );
        return strongRegex.test(value);
    },
    message: field => `${field} is weak.`
});
extend("required", {
    validate(value) {
        return {
            required: true,
            valid: ["", null, undefined].indexOf(value) === -1
        };
    },
    computesRequired: true
});
extend("email", email);

Vue.component(
    "login-component",
    require("./components/LoginComponent.vue").default
);

Vue.component("ValidationProvider", ValidationProvider);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
