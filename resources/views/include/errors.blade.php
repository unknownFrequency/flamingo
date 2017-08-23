@if (count(session('errors')) > 1)
    @foreach (session('errors')->all() as $error)
        <div id="flash-message-error" class="alert alert-danger">
            <ul>
                <li>{{ $error }}</li>
            </ul>
        </div>
    @endforeach
@elseif(session('errors'))
    <div id="flash-message-error" class="alert alert-danger">
        <ul>
            <li>{{ session('errors') }}</li>
        </ul>
    </div>
@endif