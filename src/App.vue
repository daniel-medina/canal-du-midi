<template>
  <div id="cdm">
    <div class="loading">
      <img src="../static/unesco.png" />
    </div>
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

        <div class="col-lg-12 col-sm-12 col-xs-12 footer">
          <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
            <li>Conçu dans le cadre de l'épreuve d'Art Appliqué du Baccalauréat Professionnel Gestion-Administration</li>
            <br />
            <li>
              <a href="https://nodejs.org" target="_blank"><img src="../static/icon/nodejs.svg" title="NodeJS" /></a>
              <a href="https://vuejs.org" target="_blank"><img src="../static/icon/vuejs.svg" title="VueJS" /></a>
              <a href="https://getbootstrap.com" target="_blank"><img src="../static/icon/bootstrap.svg" title="Bootstrap" /></a>
              <a href="http://sass-lang.com" target="_blank"><img src="../static/icon/sass.svg" title="SASS" /></a>
              <a href="https://www.github.com/daniel-medina/canal-du-midi" target="_blank"><img src="../static/icon/github.svg" title="Github" /></a>
            </li>
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
    background: $background-footer;
    min-height: 460px;
    min-width: 248px;
  }

  /** class that must be properly readable */
  .read {
    padding: 0 !important;
  }

  img {
    border-radius: $img-border-radius;
    box-shadow: $img-shadow;
  }

  p {
    line-height: $text-line;
  }

  .loading {
    position: fixed;
    top: 40%;
    left: 0;
    width: 100%;
    text-align: center;

    z-index: -1;

    -webkit-animation-name: spin;
    -webkit-animation-duration: 1000ms;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: spin;
    -moz-animation-duration: 1000ms;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: spin;
    -ms-animation-duration: 1000ms;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -o-transition: rotate(3600deg);

    img {
      box-shadow: none !important;
      border-radius: 0 !important;
    }
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

  .background-para-3 {
    background: $background-para-3;
    color: $text-white;
  }

  .background-para-4 {
    background: $background-para-4;
    color: $text-white;
  }

  .illustration {
    text-align: center;
    font-size: $text-size-tiny;

    li {
      font-style: italic;
      padding: $illustration-list-padding !important;

      &:before {
        content: none !important;
      }
    }

    img {
      margin: $illustration-image-margin;
      height: $para-img-height;
      max-width: $para-img-width;
    }
  }

  .espece {
    text-align: center;
    font-size: $text-size-tiny;

    li {
      font-weight: bold;
      font-size: $text-size-small;
      padding: $illustration-list-padding !important;

      &:before {
        content: none !important;
      }
    }

    img {
      margin: $illustration-image-margin;
      height: $para-faune-img-height;
      max-width: $para-faune-img-width;
    }
  }

  .para-1 {
    text-align: justify;
    margin: $para-margin;

    img {
      text-align: center;
      height: $para-img-height;
      border-width: 5px;
    }

    p {
      margin: $para-margin;
    }
  }

  .para-2 {
    text-align: justify;
    margin: $para-margin;

    img {
      text-align: center;
      height: $para-img-height;
    }

    p {
      margin: $para-margin;
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
    text-transform: uppercase;
    color: $footer-font-color;

    background: $background-footer;
    padding: $footer-padding;

    a {
      padding: $footer-icon-padding;
      
      &:focus {
        outline: none !important;
      }
    }

    img {
      width: $footer-icon-height;
      height: $footer-icon-width;
      box-shadow: none !important;
    }
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
        outline: none;
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
    .title-index {
      float: left;
      position: $title-position;
      bottom: $title-index-position-bottom;
      right: $title-index-position-right;
      padding: $floaty-padding;

      color: $title-index-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-title;
      font-weight: $title-weight;
      text-shadow: 0 0 10px black;
    }

    .subtitle-index {
      float: left;
      position: fixed;
      bottom: $title-index-position-bottom - 3%;
      right: $title-index-position-right + 2%;
      padding: $floaty-padding;

      color: $title-index-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-subtitle;
      font-weight: $title-weight;
      text-shadow: 0 0 10px black;
    }
    /** Histoire's discover frames */
    .title-histoire {
      float: left;
      position: $title-position;
      bottom: $title-histoire-position-bottom;
      left: $title-histoire-position-left;
      padding: $floaty-padding;

      color: $title-histoire-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-title - 45px;
      font-weight: $title-weight;
      text-shadow: $title-histoire-shadow;
    }

    .subtitle-histoire {
      float: left;
      position: fixed;
      bottom: $title-histoire-position-bottom - 60px;
      left: $title-histoire-position-left - 1%;
      padding: $floaty-padding;

      color: $title-histoire-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-subtitle + 5px;
      font-weight: $title-weight;
      text-shadow: $title-histoire-shadow;
    }

    /** Faune-flore's discover frames */
    .title-faune-flore {
      float: left;
      position: $title-position;
      top: $title-faune-flore-position-top;
      left: $title-faune-flore-position-left;
      padding: $floaty-padding;

      color: $title-faune-flore-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-title - 45px;
      font-weight: $title-weight;
      text-shadow: $title-faune-flore-shadow;
    }

    .subtitle-faune-flore {
      float: left;
      position: fixed;
      top: $title-faune-flore-position-top + 100px;
      right: $title-faune-flore-position-left;
      padding: $floaty-padding;

      color: $title-faune-flore-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-subtitle + 5px;
      font-weight: $title-weight;
      text-shadow: $title-faune-flore-shadow;
    }
  }
  /** discover frame for small displays */
  .discover-xs {
    font-weight: bold;
    font-size: $text-size-big + 10px;
    text-transform: uppercase;

    .top {
      position: fixed;
      top: 50px;
      right: 20px;
    }

    .bottom {
      position: fixed;
      bottom: 0;
      left: 20px;
    }

    .index {
      line-height: $text-line + 20px;
      color: $text-white;
      text-shadow: $title-index-shadow;
    }

    .histoire {
      line-height: $text-line + 20px;
      font-size: $text-size-title - 45px;
      color: $title-histoire-color;
      font-family: $title-family;
      text-shadow: $title-histoire-shadow;
    }

    .faune-flore {
      line-height: $text-line + 20px;
      color: $title-faune-flore-color;
      font-family: $title-family;
      text-transform: $title-transform;
      font-size: $text-size-title - 45px;
      font-weight: $title-weight;
      text-shadow: $title-faune-flore-shadow;
    }
  }

  /** Characters */
  .title-character {
    text-transform: uppercase;
    border-bottom: 1px solid $para-border-histoire;
  }

  .title-faune {
    text-transform: uppercase;
    border-bottom: 1px solid $para-border-faune;
  }

  /** Routes transition animations */
  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }

  /** Loading animation */
  @-ms-keyframes spin {
    from { -ms-transform: rotate(0deg); }
    to { -ms-transform: rotate(360deg); }
  }
  @-moz-keyframes spin {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
  }
  @-webkit-keyframes spin {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
  }
  @keyframes spin {
    from {
      transform:rotate(0deg);
    }
    to {
      transform:rotate(360deg);
    }
  }
</style>
