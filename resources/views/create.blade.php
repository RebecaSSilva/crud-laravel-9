@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Adicionar usuário</div>
	<div class="card-body">
		<form method="post" action="{{ route('usuario.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do usuário</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10"> 
					<input type="text" name="email" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Telefone</label>
				<div class="col-sm-10">
					<input type="text" name="telefone" class="form-control" />
					@error('telefone')
    					<span class="invalid-feedback" role="alert">
        					<strong>{{ $message }}</strong>
    					</span>
					@enderror
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Adicionar" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
