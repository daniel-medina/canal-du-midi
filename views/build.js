/**
 * List of all vue components in order to compile them
 */
const vue = require('vue');

const index = require('./index.vue');

new vue({
    el: '#canal',
    render: function (createElement) {
	return createElement(index);
    }
});
