@extends('layout.layout')

@section('titre')Canal du Midi @endsection

@section('contenu')
    <div class="cover">
	<div class="container-fluid hidden-xs">
	    <div class="menu">
		<li><a href="#presentation">Présentation</a></li>
		<li><a href="#">Historique</a></li>
		<li><a href="#">Géographie</a></li>
		<li><a href="#">Faune & flore</a></li>

		<li class="droite"><a href="#">Contact</a></li>
	    </div>
	</div>

	<div class="container-fluid visible-xs">
	    <!-- menu mobile -->
	    
	</div>

	<div class="cover-texte">
	    <div class="col-lg-12 tete">
		<p class="text-center">le canal du midi</p>
	    </div>

	    <div class="col-sm-6 col-md-6 col-lg-5 gauche hidden-xs">
		C'est :<br />
		▶ un canal artificiel<br />
		▶ une création française<br />
		▶ un patrimoine mondial<br />
		▶ 350 ans d'existence<br />
		▶ 241 km de long
	    </div>

	    <div class="col-sm-6 col-md-6 col-lg-7 droite">
		Découvrez l'oeuvre intemporelle de Pierre-Paul Riquet.
	    </div>
	</div>
    </div>

    <div class="container-fluid contenu">
	<p class="titre text-left">Présentation</p>
	<div class="col-lg-12 texte">
	    <div class="col-lg-2">
		<a href="#" class="thumbnail"><img  src="../images/1.png" alt="" /></a>
	    </div>

	    <div class="col-lg-10">
		Test
	    </div>
	</div>
	<hr class="visible-xs" />
	<div class="col-lg-12 texte">
	    <div class="col-lg-2">
		<a href="#" class="thumbnail image-right"><img  src="../images/1.png" alt="" /></a>
	    </div>

	    <div class="col-lg-10">
		Test
	    </div>
	</div>
    </div>
@endsection
