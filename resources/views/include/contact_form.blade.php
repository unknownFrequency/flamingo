<form method="POST" action="/kontakt">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">
                    Navn</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Udfyld navn" required="required" />
            </div>
            <div class="form-group">
                <label for="email">
                    Email Adresse</label>
                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Udfyld email" required="required" /></div>
            </div>
            <div class="form-group">
                <label for="subject">
                    Område</label>
                <select id="subject" name="subject" class="form-control" required="required">
                    <option value="na" selected="">Vælg venligst en:</option>
                    <option value="service">Webløsning</option>
                    <option value="suggestions">Webshop</option>
                    <option value="product">Grafisk Arbejde</option>
                    <option value="photo">Foto/Video</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">
                    Besked</label>
                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                          placeholder="Skriv her"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                Send Besked</button>
        </div>
    </div>
</form>
