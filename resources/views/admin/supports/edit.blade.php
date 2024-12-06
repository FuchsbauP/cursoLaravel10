<h1 class="mb-4 text-2xl font-bold text-gray-800">Dúvida {{ $support->id }}</h1>

<!-- Mensagens de Erro -->
@if ($errors->any())
    <div class="mb-4 rounded bg-red-100 p-4 text-red-700">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Formulário -->
<form action="{{ route('supports.update', $support->id) }}" method="POST" class="rounded bg-white p-6 shadow-md">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support,
    ])
</form>
