<template>
    <div>
	<div class="filter">
            <div class="col-lg-12 block background">
		<div class="col-lg-12 inner-big text-center">
		    Le Canal du Midi<br />
		    <br />
		    Découvrez l'oeuvre intemporelle de<br />
		    Pierre-Paul Riquet
		</div>
            </div>
	</div>
	<div class="discover background-white">
	    <p class="text-muted">
		<i>
		    Découvrez l'histoire du Canal du Midi, ainsi que sa faune et flore en naviguant sur ce site de l'internet.
		</i>
	    </p>
	</div>
	<div class="block">
	    <div class="col-lg-12 inner background-white">
		<div class="col-lg-12">
		    <h1 class="text-center"><strong>Le Canal du Midi, c'est ...</strong></h1>
		    <br />
		    <li>Un patrimoine mondial de l'UNESCO.</li>
		    <li>Environ 350 ans d'existence.</li>
		    <li>Le plus grand chantier du XVIIème siècle.</li>
		    <li>Une rivière artificielle de 241 km, reliant deux mers.</li>
		    <li>L'oeuvre de la vie de Pierre-Paul Riquet ...</li>
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
    fliter: $background-filter;

    background: $background-index no-repeat;
    background-attachment: $background-attachment;
    background-size: $background-size;
    background-opacity: 0.4;
    background-position: $background-position;
}

.discover {
    float: right;

    width: 500px;
    padding: $floaty-padding;
    font-size: $text-size-small;
}

</style>
