module.exports.controllers = function(app) {
    app.get('/', function (request, response) {
        response.sendFile(process.cwd() + './public/index.html');
    });
}
