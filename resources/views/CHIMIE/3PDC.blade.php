
<link href="{{ asset('assets/css/PDC.css') }}" rel="stylesheet">







      <div class="container">
        <h1 style="color:aliceblue;">{{ $module->nom }}</h1>
		<div class="btn"><a href="{{ route('tp', ['id' => $module->tps->id]) }}">TP</a></div>
		<div class="btn"><a href="{{ route('td', ['id' => $module->tds->id]) }}" >TD</a></div>
				<div class="btn"><a href="{{ route('cours', ['id' => $module->cours->id]) }}" >Cours</a></div>

	</div>



