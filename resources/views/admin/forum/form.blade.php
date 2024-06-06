<h1></h1>

<form action="{{ route('forum.cadastrar') }}" method="POST">
	{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
	@csrf()

	<input type="text" placeholder="Assunto" name="assunto" />

	<textarea name="conteudo" cols="30" rows="15" placeholder="Descrição"></textarea>

	<button type="submit">Enviar</button>
</form>