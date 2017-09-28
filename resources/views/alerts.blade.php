<div class="row">
	<div class="col-md-12">
		@if (count($errors) > 0)
		<div class="alert alert-danger alert-dismissable">
			<i class="icon fa fa-warning"></i> Ocurrió un error!
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(Session::has('flash_message'))
		<div class="alert alert-success">
			<i class="fa fa-fw fa-check"></i> {{ Session::get('flash_message') }}
		</div>
		@endif
		@if(Session::has('error'))
		<div class="alert alert-danger">
			<i class="icon fa fa-warning"></i> {{ Session::get('error') }}
		</div>
		@endif
	</div>
</div>