<h2>
    <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
</h2>
<p class="lead">
    af: <strong>Brugernavn</strong>
</p>
<p><span class="glyphicon glyphicon-time"></span> Fra {{ $post->created_at->toFormattedDateString() }} </p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p>
    <a href="/posts/{{ $post->id }}">
        {{ Illuminate\Support\Str::limit($post->body, 350) }}
    </a>
</p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
