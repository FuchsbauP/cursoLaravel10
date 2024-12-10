<h1>Dúvida {{ $supports->id }}</h1>

<form action="{{ 'supports.update', $support->id }}">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject"
    value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição" >
        {{ $support->body }}
    </textarea>
    <button type="submit">Enviar</button>
</form>

<form action="{{ 'supports.destroy', $support->id }}">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>