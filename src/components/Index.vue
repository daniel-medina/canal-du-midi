<template>
    <div>
        <div class="col-lg-12 block background">
	    <div class="col-lg-6 inner-big text-left">
		Le Canal du Midi<br />
		Blablabla<br />
		Blablabla<br />
		Blablabla<br />
	    </div>

	    <div class="col-lg-6 inner-big text-right">
		Le Canal du Midi<br />
		Blablabla<br />
		Blablabla<br />
		Blablabla<br />
	    </div>
        </div>

	<div class="col-lg-12 background-white">
	    Coucou !
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
