
@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Usuário detalhes</b></div>
			<div class="col col-md-6">
				<a href="{{ route('usuario.index') }}" class="btn btn-primary btn-sm float-end">Ver Todos</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nome do usuário</b></label>
			<div class="col-sm-10">
				{{ $usuario->nome }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Email</b></label>
			<div class="col-sm-10">
				{{ $usuario->email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Telefone</b></label>
			<div class="col-sm-10">
				{{ $usuario->telefone }}
			</div>
		</div>
	</div>
</div>

@endsection('content')
