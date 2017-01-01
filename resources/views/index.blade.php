@extends('layout.layout')

@section('titre')Accueil @endsection

@section('contenu')
    <div class="presentation">
	<div class="container">
	    <div class="menu">
		<li><a href="#">Accueil</a></li>
		<li><a href="#">Historique</a></li>
		<li><a href="#">Géographie</a></li>

		<li class="droite"><a href="#">Droite</a></li>
	    </div>
	</div>

	<div class="pres-milieu">
	    le canal du midi
	</div>
    </div>

    <div class="container-fluid">
	<div class="col-lg">
	    <p class="titre-info text-left"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Un lieu de recueil avec la nature</p>

	    <!-- Image côté gauche -->
	    <div class="col-md-12">
		<div class="col-md-3">
		    <a href="{{ url("images/1.png") }}" class="thumbnail" target="_blank"><img src="images/1.png" alt="" title="Image" /></a>
		</div>

		<div class="col-md-9">
		    <p class="info-contenu">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus purus eget augue eleifend vehicula. Mauris ut euismod arcu. Praesent vel faucibus enim, eu vehicula tellus. Praesent nec lacinia diam, vel facilisis quam. Maecenas blandit eget ante sed faucibus. Donec sit amet ipsum quis arcu lacinia ultrices. Sed venenatis urna in dolor semper pellentesque. Fusce at sapien dui. Nulla vehicula erat vel tellus mollis egestas. Etiam in lacus dictum, ornare magna a, tincidunt nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce et fringilla sem. Nunc magna arcu, tempus ac orci eget, varius ornare massa.
		    </p>
		</div>
	    </div>

	    <!-- Image côté droit -->
	    <div class="col-md-12">
		<div class="col-md-9">
		    <p class="info-contenu">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus purus eget augue eleifend vehicula. Mauris ut euismod arcu. Praesent vel faucibus enim, eu vehicula tellus. Praesent nec lacinia diam, vel facilisis quam. Maecenas blandit eget ante sed faucibus. Donec sit amet ipsum quis arcu lacinia ultrices. Sed venenatis urna in dolor semper pellentesque. Fusce at sapien dui. Nulla vehicula erat vel tellus mollis egestas. Etiam in lacus dictum, ornare magna a, tincidunt nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce et fringilla sem. Nunc magna arcu, tempus ac orci eget, varius ornare massa.
		    </p>
		</div>

		<div class="col-md-3">
		    <a href="{{ url("images/1.png") }}" class="thumbnail" target="_blank"><img src="images/1.png" alt="" title="Image" /></a>
		</div>
	    </div>
	</div>
    </div>
@endsection
