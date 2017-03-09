<template>
    <div id="cdm">
	<div class="container-fluid">
	    <div class="row">
		<nav class="menu">
		    <router-link to="/" exact><li>Accueil</li></router-link>
		    <router-link to="/histoire"><li>Histoire</li></router-link>
		    <router-link to="/faune-flore"><li>Faune & Flore</li></router-link>
		</nav>

		<transition name="fade" mode="out-in">
		    <router-view></router-view>
		</transition>
	    </div>
	</div>
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

  /** Template global styles */
  body {
      background: $background no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: bottom;
  }

  nav.menu {
      margin-bottom: 20px;
      text-align: center;

      .router-link-active {
	  border-bottom: 1px solid $hover;
      }

      a {
	  font-size: $menu-font;
	  color: $menu-font-color;
	  text-shadow: $menu-font-shadow;
	  text-transform: $menu-font-transform;
	  font-weight: $menu-font-weight;
	  padding: $menu-padding;

	  transition: $transition-normal;
	  border-bottom: 1px solid $transparent;

	  &:hover {
	      text-decoration: none;
	      border-color: $hover;
	  }

	  &:focus {
	      text-decoration: none;
	  }
      }

      li {
	  display: inline;
	  list-style: none;

	  &:hover {
	      text-decoration: none;
	  }
      }
  }

  .block {
      .inner {
	  padding: $block-padding;
	  background: $el-background;
	  box-shadow: $block-shadow;

	  color: white;
      }
  }

  /** Routes transition animations */
  .fade-enter-active, .fade-leave-active {
      transition: opacity .3s;
  }

  .fade-enter, .fade-leave-to {
      opacity: 0;
  }
</style>
