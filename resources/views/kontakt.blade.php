@extends('layouts\app')

@section ('content')
	<div class="jsalert">
		<script>
			alert ('JavaScript!');
		</script>
		<?php var_dump($_GET); ?>
		<div style="text-align:center;">
			<h3>Projekt wykorzystuje Routes, HTML Forms, CSS, JavaScript, PHP, Artisan, ORM,</h3>
			<?php echo Form::checkbox('name', 'value', true); ?>
			<a href="mailto:wojtysz@gmail.com">wojtysz@gmail.com</a>
		</div>
	</div>
@endsection