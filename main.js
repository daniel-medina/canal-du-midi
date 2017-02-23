/** Importing configs */


/** Importing modules */
const express = require('express');
global.vue = require('vue');
const vueRouter = require('vue-router');
const browserify = require('browserify');
const vueify = require('vueify');
const fs = require('fs');

/** Compiling vue components */
browserify(__dirname + '/views/build.js')
    .transform(vueify)
    .bundle()
    .pipe(fs.createWriteStream(__dirname + '/public/js/app.js'));

/** Initialiazing the HTTP server with Express */
const app = express();

/** Defining the public static folder to use */
app.use(express.static('public'));

/** Importing routes */
const routes = require('./routes/main.js');
routes.controllers(app);

/** Listening to the HTTP server port */
app.listen(3042);
console.log("Initialized Express. Listening to port 3042 ...");
