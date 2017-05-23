<h2>
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
</h2>
<p class="lead">
    af: <strong>{{ $post->user->name }}</strong>
</p>
<p> Fra {{ $post->created_at->toFormattedDateString() }} </p>

<p>
    <a href="/posts/{{ $post->id }}">
        {{--Display only 350 chars of full body--}}
        {{ Illuminate\Support\Str::limit($post->body, 350) }}
    </a>
</p>
