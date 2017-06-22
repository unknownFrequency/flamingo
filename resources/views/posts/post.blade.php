<!--
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
-->
@if($post->status === "PUBLISHED")

        <div class="col-sm-4 col-md-4">
            <div class="post">
                <div class="post-img-content">
                  <a href="/posts/{{ $post->id }}">  <img class="img-responsive" src="{{ $post->image }}" /></a>

                </div>
                <div class="content">
                    <div class="author">
                      <p>
                          d. {{ $post->created_at->toFormattedDateString() }}
                      </p>
                    </div>
                    <h5>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h5>
                    <hr>
                    <a href="/posts/{{ $post->id }}">
                      <p style="text-align:left; color:#333;">
                        {{ $post->excerpt }}
                      </p>
                    </a>
                    <div>
                        <a href="/posts/{{ $post->id }}" class="btn btn-warning btn-sm">Læs mere</a>
                    </div>
                </div>
            </div>
        </div>
@endif
