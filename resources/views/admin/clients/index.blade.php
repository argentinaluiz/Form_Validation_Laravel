@extends('layouts.layout')

@section('content')

	<h3>Listagem de Clientes</h3>
	<br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF/CNPJ</th>
				<th>Data Nascimento</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Sexo</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clients as $client)
				<tr>
					<td>{{ $client->id }}</td>
					<td>{{ $client->name }}</th>
					<td>{{ $client->document_number }}</td>
					<td>{{ $client->date_birth }}</td>
					<td>{{ $client->email }}</td>
					<td>{{ $client->fone }}</td>
					<td>{{ $client->sex }}</td>
					<td></td>
				</tr>
			@endforeach
		</tbody>	
	</table>

@endsection