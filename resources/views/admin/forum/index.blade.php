<h1>Listagem dos suportes</h1>

<a href="{{ route('forum.form') }}">Criar dúvida</a>

<table>
	<thead>
		<th>Assunto</th>
		<th>Status</th>
		<th>Descrição</th>
		<th></th>
	</thead>
	<tbody>
		@foreach ($forums as $forum)
			<tr>
				<td>{{ $forum->assunto }}</td>
				<td>{{ $forum->status }}</td>
				<td>{{ $forum->conteudo }}</td>
				<td></td>
			</tr>
		@endforeach
	</tbody>
</table>