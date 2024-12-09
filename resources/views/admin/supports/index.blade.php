<h1>Listagem dos Suportes</h1>
<a href="{{ route('supports.create') }}">Criar Novo Suporte</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @if ($supports instanceof \App\Repositories\PaginationPresenter)
            @foreach ($supports->items() as $support)
                <tr>
                    <td>{{ $support->subject }}</td>
                    <td>{{ getStatusSupport($support->status) }}</td>
                    <td>{{ $support->body }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}">Detalhar</a>
                        <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<x-pagination :paginator="$supports" :appends="$filters" />
