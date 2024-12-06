{{-- <input type="text" value="{{ csrf_token() }}" name="_token"> --}}
@csrf()
<input type="text" placeholder="Assunto" name="subject" value='{{ $supports->subject ?? old('subject') }}'>
<textarea name="body" cols="30" rows="5" placeholder="Descreva sua dúvida">{{ $supports->subject ?? old('body') }}</textarea>
<button type="submit">Enviar</button>
<button><a href="{{ route('supports.index') }}">Voltar</a></button>
