    <form method="POST" action="{{'/beskeder/' . (int)$message_id . '/respond'}}">
        {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control" id="body" name="body" placeholder="Svar" ></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Gem</button>
        </div>
    </form>
