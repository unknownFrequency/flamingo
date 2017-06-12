<form method="POST" action="/messages/{{ $message->id or '' }}">
    {{ csrf_field() }}
    @if(isset($method))
        {{ method_field('PATCH') }}
    @endif;
    <div class="form-group">
        <label for="title">Overskrift</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titel" value="{{ $message->title or 'Overskrift' }}">
    </div>
    <div class="form-group">
        <label for="body">Tekst</label>
        <textarea class="form-control" id="body" name="body">{{ $message->body or 'Tekst' }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Gem</button>
    </div>
</form>
