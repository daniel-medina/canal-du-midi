@extends('layout.layout')

@section('titre')Accueil @endsection

@section('contenu')
    <div class="presentation">
	<div class="container-fluid hidden-xs">
	    <div class="menu">
		<li><a href="#presentation">Présentation</a></li>
		<li><a href="#">Historique</a></li>
		<li><a href="#">Géographie</a></li>
		<li><a href="#">Faune & flore</a></li>

		<li class="droite"><a href="#">Contact</a></li>
	    </div>

	    <div class="menu-fixed">
		<li><a href="#presentation">Présentation</a></li>
		<li><a href="#">Historique</a></li>
		<li><a href="#">Géographie</a></li>
		<li><a href="#">Faune & flore</a></li>

		<li class="droite"><a href="#">Contact</a></li>
	    </div>
	</div>

	<div class="pres-milieu">
	    le canal du midi
	</div>
    </div>

    <div class="container-fluid">
	<div class="col-lg" id="presentation">
	    <p class="titre-info text-left"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Présentation du Canal du Midi</p>

	    <!-- Image côté gauche -->
	    <div class="col-md-12">
		<div class="col-md-3">
		    <a href="{{ url("images/1.png") }}" class="thumbnail" target="_blank"><img src="images/1.png" alt="" title="Image" /></a>
		</div>

		<div class="col-md-9">
		    <p class="info-contenu">
			Le canal du Midi est un canal qui relie le canal de Garonne de Toulouse, à Marseillan et débouche sur l’étang de Thau sur une distance de 241 kilomètres. Techniquement, le canal du Midi offre un passage de la Méditerranée à l’Atlantique. Il traverse les départements de la Haute-Garonne, de l’Aude et de l’Hérault.
		    </p>
		</div>
	    </div>

	    <!-- Image côté droit -->
	    <div class="col-md-12">
		<div class="col-md-9">
		    <p class="info-contenu">
			Des écluses sont dispersées tout le long du canal, elles sont essentielles au fonctionnement du canal du Midi. Il y en a, en tout, 63 tout au long du canal. Elles ont été construites entre 1666 et 1681 et ont ensuite été rénovées en 1970. A l’origine, les portes de chaque écluse étaient faites en chêne avec des bras d’écartement. Les écluses servent à descendre et monter dans le canal comme un ascenseur, et ce afin de faciliter le passage des bateaux en plus de pouvoir s’adapter facilement à l’environnement. En effet, il n’est pas facile de faire passer des bateaux à travers une cascade d’eau.
		    </p>
		</div>

		<div class="col-md-3">
		    <a href="{{ url("images/1.png") }}" class="thumbnail" target="_blank"><img src="images/1.png" alt="" title="Image" /></a>
		</div>
	    </div>
	</div>
    </div>
@endsection
