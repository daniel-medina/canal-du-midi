<template>
    <div id="cdm">
        <router-link to="/">Accueil</router-link>
        <router-link to="/histoire">Histoire</router-link>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
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

  /** Template global style */
  body {
      background: $background;
  }

  /** Routes transition animations */
  .fade-enter-active, .fade-leave-active {
      transition: opacity .3s;
  }

  .fade-enter, .fade-leave-to {
      opacity: 0;
  }
</style>
