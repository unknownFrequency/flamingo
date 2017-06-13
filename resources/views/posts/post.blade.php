@if($post->status === "PUBLISHED")
    <h2>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h2>

    <p class="lead">
        af: <strong>{{ App\User::find($post->author_id)->name }}</strong>
    </p>

    <p>
        d. {{ $post->created_at->toFormattedDateString() }}
    </p>

    <p>
        <img style="width: 400px; height:300px;" src="{{ $post->image }}" />
    </p>

    <p>
        <a href="/posts/{{ $post->id }}">
            {{ $post->excerpt }}
        </a>
    </p>
    <hr />
@endif