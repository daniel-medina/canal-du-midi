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
          <div class="col-lg-6 text-center">
            Réalisé avec NodeJS et VueJS.<br />
            Code source disponible sous licence MIT.<br />
            <a href="https://www.github.com/daniel-medina/canal-du-midi" target="_blank">github.com/daniel-medina/canal-du-midi</a>
          </div>

          <div class="col-lg-6 text-center">
            Conçu dans le cadre de<br />
            l'épreuve d'Art Appliqué du<br />
            Baccalauréat Professionnel Gestion-Administration
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
    font-family: $font !important;
    background: black;
    min-height: 860px;
    min-width: 1248px;
  }

  .background-white {
    background: $background-white;
  }

  .background-para-1 {
    background: $background-para-1;
    color: $text-white;
  }

  .background-para-2 {
    background: $background-para-2;
    color: $text-white;
  }

  .illustration {
    text-align: center;
    font-size: $text-size-tiny;
    font-style: italic;

    li {
      padding: $illustration-list-padding !important;

      &:before {
        content: none !important;
      }
    }

    img {
      margin: $illustration-image-margin;
      height: $para-img-height;
    }
  }

  .para-1 {
    text-align: justify;

    img {
      text-align: center;
      height: $para-img-height;
      border-width: 5px;
    }
  }

  .para-2 {
    text-align: justify;

    img {
      text-align: center;
      height: $para-img-height;
    }
  }

  /** illustrations */
  .para-3 {
    text-align: center;

    img {
      text-align: center;
      height: $para-img-height;
      margin: $para-3-margin;
    }
  }

  .filter {
    background: orange;
  }

  li {
    list-style: none;
  }

  a {
    color: $url-color;

    &:hover {
      color: $hover;
    }
  }

  .separation {
    border-right: 2px solid rgba(100, 100, 100, 0.4);
  }

  .footer {
    font-size: $footer-font-size;
    color: $footer-font-color;

    background: $background-footer;
    padding: $footer-padding;
  }

  nav.menu {
    position: fixed;
    z-index: 42;
    left: 0;
    right: 0;
    top: 0;
    text-align: right;
    padding: 10px;
    background: $menu-background;
    box-shadow: $menu-shadow;

    .router-link-active {
      border-bottom: 1px solid $hover;
    }

    a {
      font-size: $menu-font;
      color: $menu-font-color;
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

    .inner {
      padding: $inner-padding-1;
      font-size: $text-size-normal;
    }

    .text-small {
      font-size: $text-size-small;
    }

    li {
      padding: $list-padding;

      &:before {
        content: "— ";
      }
    }

    h1 {
      text-transform: uppercase;
    }
  }

  /** Discover frames */
  .discover {
    /** Index's discover frames */
    .title {
      float: left;
      position: $title-position;
      bottom: $title-position-bottom;
      right: $title-position-right;
      padding: $floaty-padding;

      color: $title-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-title;
      font-weight: $title-weight;
      text-shadow: 0 0 10px black;
    }

    .subtitle {
      float: left;
      position: fixed;
      bottom: $title-position-bottom - 3%;
      right: $title-position-right + 2%;
      padding: $floaty-padding;

      color: $title-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-subtitle;
      font-weight: $title-weight;
      text-shadow: 0 0 10px black;
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
