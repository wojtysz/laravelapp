@extends('layouts\app')

@section('content')
<div class="bck">
	{{--<div class="col-sm-6 offset-3 content">
		<h1>Test widoku</h1>
	</div>--}}
	<div class="col-sm-6 offset-3 linkdiv">
		<ul class="ullista">
			<li class="lilista"><a href='/'><strong> Sprawdź to</strong></a></li>
			<li class="lilista"><a href='{{ route('kontakt') }}'>Sprawdź to też</a></li>
			<li class="lilista"><a href='/image-upload'>Kliknij</a></li>
		</ul>
	</div>
	<div id="powitanieop">
		
	</div>
	<div id="powitanie" class="col-sm-6 offset-3 ">
		Witaj na stronie LaravelApp
	</div>
	<div class="foto">

	</div>
</div>
<div style="text-align:center;">
<?php echo 'php echo stopka'; ?>
</div>
@endsection