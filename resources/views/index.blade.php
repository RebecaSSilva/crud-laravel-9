@extends('master')

@section('content')

@if($message = Session::get('successo'))
<div class="alert alert-success">{{ $message }}</div>
@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Usuários</b></div>
			<div class="col col-md-6">
				<a href="{{ route('usuario.create') }}" class="btn btn-success btn-sm float-end">
					<i class="bi bi-plus-circle"></i> Novo usuário
				</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@if(count($data) > 0)
					@foreach($data as $row)
						<tr>
							<td>{{ $row->nome }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ $row->telefone }}</td>
							<td>
								<form method="post" action="{{ route('usuario.destroy', $row->id) }}">
									@csrf
									@method('DELETE')
									<a href="{{ route('usuario.show', $row->id) }}" class="btn btn-primary btn-sm">
										<i class="bi bi-eye"></i> Ver
									</a>
									<a href="{{ route('usuario.edit', $row->id) }}" class="btn btn-warning btn-sm">
										<i class="bi bi-pencil"></i> Editar
									</a>
									<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
										<i class="bi bi-trash"></i> Excluir
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="4" class="text-center">Nenhum usuário encontrado</td>
					</tr>
				@endif
			</tbody>
		</table>
		{!! $data->links() !!}
	</div>
</div>
@endsection