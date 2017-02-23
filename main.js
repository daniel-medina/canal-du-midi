/** Importing configs */
const config = require('./config.json');

/** Importing modules */
const history = require('connect-history-api-fallback');
const express = require('express');
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

/** Initialiazing the history, so refreshing the page after using a route won't return an error */
app.use(history());

/** Defining the public static folder to use */
app.use(express.static('public'));

/** Importing routes */
const routes = require('./routes/main.js');
routes.controllers(app);

/** Listening to the HTTP server port */
app.listen(config.port);
console.log("Initialized Express. Listening to port " + config.port + " ...");
