const express = require('express');
const path = require('path');
const history = require('connect-history-api-fallback');

const app = express();

/** Enabling history api fallback */
app.use(history());

/** Using static files */
app.use(express.static('public'));



/** Default directory, made reactive with Vue */
app.get('/', function (request, response) {
    response.sendFile('index.html');
});

/** Running the server */
app.listen(3042);
console.log("Running server ...");
