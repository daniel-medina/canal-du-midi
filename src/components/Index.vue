<template>
  <div>
    <div class="filter">
      <div class="col-lg-12 block background">
        <div class="discover">
          <div class="title">
              Le Canal du Midi
          </div>
          <div class="subtitle">
            Découvrez l'oeuvre intemporelle de Pierre-Paul Riquet
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="col-lg-12 inner background-white">
        <div class="col-lg-12">
          <h1 class="text-center"><strong>Le Canal du Midi, c'est ...</strong></h1>
        </div>
        <div class="col-lg-10">
          <br />
          <li>Un patrimoine mondial de l'UNESCO.</li>
          <li>Environ 350 ans d'existence.</li>
          <li>Le plus grand chantier du XVIIème siècle.</li>
          <li>Une rivière artificielle de 241 km, reliant deux mers.</li>
          <li>L'héritage de Pierre-Paul Riquet.</li>
        </div>
        <div class="col-lg-2 illustration">
          <img src="../../static/unesco.jpg" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name: 'index',
    }
</script>

<style lang="scss" scoped>

  /** Importing variables file */
  @import '../sass/variables.scss';

.background {
    height: $background-height;
    padding-top: $menu-decal;
    filter: $background-filter;

    background: $background-index no-repeat;
    background-attachment: $background-attachment;
    background-size: $background-size;
    background-opacity: 0.4;
    background-position: $background-position;
}



</style>
