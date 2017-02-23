/** Importing configs */


/** Importing modules */
const express = require('express');
const vue = require('vue');
const vueRouter = require('vue-router');

/** Initialiazing the HTTP server with Express */
const app = express();

/** Importing routes */
const routes = require('./routes/main.js');
routes.controllers(app);

app.listen(3042);
