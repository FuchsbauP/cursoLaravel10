<div>
    <table class="min-w-full divide-y divide-slate-900">
        <thead class="bg-slate-700">
            <tr>
                <th>Assunto</th>
                <th>Status</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-slate-500">
            @foreach ($supports->items() as $support)
                <tr>
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->body }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
