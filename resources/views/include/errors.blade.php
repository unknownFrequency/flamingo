@if(count($errors))
    <div class="form-group-lg">
        <div class="alert alert-danger">
            <ul>
                {{--$errors is available on ALL pages--}}
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif