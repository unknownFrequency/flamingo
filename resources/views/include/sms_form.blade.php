<form method="POST" action="/sms">
    {{ csrf_field() }}

    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Navn" value="">
    </div>

    <div class="form-group">
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefonnummer" value="" required>
    </div>

    <div class="form-group">
        <label for="body">Hvad handler henvendelsen om?</label>
        <textarea class="form-control" id="body" name="body" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>
