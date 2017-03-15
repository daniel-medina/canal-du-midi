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

		<div class="col-lg-12 footer">
		    <div class="col-lg-6 text-left">
			Footer test
		    </div>

		    <div class="col-lg-6 text-right">
			Footer test
		    </div>
		</div>
	    </div>
	</div>
    </div>
  </template>

<script>
    export default {
        name: 'app',
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
      background: black;
  }

  .background-white {
      background: $background-white;
      height: 500px;
  }

  .footer {
      background: $background-footer;
      padding: $footer-padding;
  }
  
  nav.menu {
      position: absolute;
      z-index: 42;
      left: 0;
      right: 0;
      top: 0;
      text-align: center;
      padding: 10px;
      background: $menu-background;
      box-shadow: $menu-shadow;

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
      .inner-big {
	  padding: $inner-big-padding;
	  font-size: $inner-big-font;

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
