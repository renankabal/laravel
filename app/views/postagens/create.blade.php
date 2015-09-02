@extends('layout.layout')

@section('content')
	<h1>Cadastrar</h1>
	{{ Form::open(array('url' => 'postagem/adicionar')) }}
		{{ Form::text('Titulo', 	  '', array('placeholder' => 'Digite o titulo')) }}
		{{ Form::textarea('Conteudo', '', array('placeholder' => 'Digite o conteudo')) }}
		{{ Form::submit('Salvar') }}
	{{ Form::close() }}
@stop