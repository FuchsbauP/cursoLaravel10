<h1>Dúvida #{{ $support->id }}</h1>

@if ($errors->any)
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ 'supports.update', $support->id }}">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">
    	{{ $support->body }}
    </textarea>
    <button type="submit">Enviar</button>
</form>
