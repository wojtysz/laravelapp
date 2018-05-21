@extends('layouts\app')

@section('content')

<div class="col-sm-6 offset-3 content">
	<h1>Test widoku</h1>
</div>
<div class="col-sm-6 offset-3 testdiv">
	<ul class="ullista">
		<li class="lilista"><a href='/'> Sprawdź to</a></li>
		<li class="lilista"><a href='{{ route('kontakt') }}'>Sprawdź to też</a></li>
		<li class="lilista">Kliknij</li>
	</ul>
</div>
<div id="powitanieop">
	<?php echo 'bubu'; ?>
</div>
<div id="powitanie" class="col-sm-6 offset-3 ">
	Witaj na stronie projektu LaravelApp
</div>
<div class="foto">

</div>
@endsection