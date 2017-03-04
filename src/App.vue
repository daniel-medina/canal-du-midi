<template>
    <div id="app">
        <router-view></router-view>
    </div>
  </template>

<script>
    export default {
        name: 'app'
    }
</script>

<style lang="scss">
  /** Importing Bootstrap and other utilities */
  $icon-font-path: "~bootstrap-sass/assets/fonts/bootstrap/";
  @import "~bootstrap-sass/assets/stylesheets/_bootstrap.scss";
  @import "~font-awesome/css/font-awesome.css";
  @import "~animate.css/animate.css";

  /** Importing variables file */
  @import 'sass/variables.scss';

  body {
      background: $background;
  }
</style>
