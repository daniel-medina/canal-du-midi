module.exports.controllers = function(app) {
    app.get('/', function (request, response) {
        response.send("test :D");
    });
}
