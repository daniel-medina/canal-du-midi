<template>
    <div>
        <div class="col-lg-12 block background">
	    <div class="col-lg-12 inner-big text-center">
		Le Canal du Midi<br />
		<br />
		Découvrez l'oeuvre intemporelle de<br />
		Pierre-Paul Riquet
	    </div>
        </div>

	<div class="col-lg-12 background-white">
	    Le Canal du Midi, c'est :
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
    height: 600px;
    padding-top: $menu-decal;

    background: $background-index no-repeat;
    background-attachment: $background-attachment;
    background-size: $background-size;
    background-position: $background-position;
}

</style>
