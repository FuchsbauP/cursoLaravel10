<h1>Dúvida {{ $support->id }}</h1>

<x-alert />

<form action="{{ route('supports.update', $support->id) }}" method="POST" class="rounded bg-white p-6 shadow-md">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support,
    ])
</form>
