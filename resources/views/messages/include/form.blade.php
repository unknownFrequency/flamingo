
<form method="POST" action="/beskeder/{{ $message->id or '' }}">
    {{ csrf_field() }}
    @if(isset($method))
        {{ method_field('PATCH') }}
    @endif

    <!-- Hvis beskeden er til en bestemt bruger bliver den sat i URL'en fra Admindelens links -->
    @if(isset($_GET['til']) && is_numeric($_GET['til']))
        <input name="til_id" type="hidden" value="{{ $_GET['til'] }}">
    @endif

    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">

    <div class="form-group">
        <label for="title">Overskrift</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titel" value="{{ $message->title or 'Overskrift' }}">
    </div>

    <div class="form-group">
        <label for="body">Tekst</label>
        <textarea class="form-control" id="body" name="body">{{ $message->body or 'Tekst' }}</textarea>
        @ckeditor('body')
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Gem</button>
    </div>
</form>




