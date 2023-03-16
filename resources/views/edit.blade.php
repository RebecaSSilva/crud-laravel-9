@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Editar Usuário</div>
	<div class="card-body">
		<form method="post" action="{{ route('usuario.update', $usuario->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do usuário</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" value="{{ $usuario->nome }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" value="{{ $usuario->email }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Telefone</label>
				<div class="col-sm-10">
					<input type="number" name="telefone" class="form-control" value="{{ $usuario->telefone }}" maxlength="11" />
					@error('telefone')
					    <div class="text-danger">{{ $message }}</div>
					@enderror
				</div>
			</div>
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $usuario->id }}" />
				<input type="submit" class="btn btn-primary" value="Editar" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
