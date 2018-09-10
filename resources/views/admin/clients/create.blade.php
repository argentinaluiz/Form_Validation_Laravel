@extends('layouts.layout')

@section('content')
	<h3>Novo Cliente</h3>
	<form method="POST" action="/admin/clients">
		{{@csrf_field()}}
			
		<div class="form-group">
			<label for="name">Nome</label>
			<input class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="document_number">Documento</label>
			<input type="text" class="form-control" id="document_number" name="document_number">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="fone">Telefone</label>
			<input class="form-control" id="fone" name="fone">
		</div>

		<div class="form-group">
			<label for="marital-status">Estado civil</label>
			<select class="form-control" id="marital-status" name="marital-status">
				<option value="">Selecione o estaddo civil</option>
				<option value="1">Solteiro</option>
				<option value="2">Casado</option>
				<option value="3">Divorciado</option>
				<option value="4">Viuvo</option>
			</select>
		</div>

		<div class="form-group">
			<label for="date_birth">Data de nascimento</label>
			<input class="form-control" id="date_birth" name="date_birth" type="date">
		</div>

		<div class="radio">
			<label>
				<input type="radio" name="sex" value="M"> Masculino
			</label>
		</div>
		
		<div class="radio">
			<label>
				<input type="radio" name="sex" value="F"> Feminino
			</label>
		</div>

		<div class="form-group">
			<label for="physical_desability">Deficiencia Fisica</label>
			<input class="form-control" id="physical_desability" name="physical_desability">
		</div>

		<div class="checkbox">
			<label>
				<input id="defaulter" name="defaulter" type="checkbox"> Inadimplente?
			</label>
		</div>
		<button type="submit" class="btn btn-default">Enviar</button>
	</form>
@endsection