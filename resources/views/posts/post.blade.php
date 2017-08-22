
@if($post->status === "PUBLISHED")

        <div class="col-sm-4 col-md-4" style="padding-bottom: 15px;">
            <div class="post">
                <div class="post-img-content">
                  <a href="/posts/{{ $post->id }}">  <img class="img-responsive" src="{{ asset('storage/'. $post->image) }}" /></a>

                </div>
                <div class="content">
                    <div class="author">
                      <p>
                          {{ $post->created_at->toFormattedDateString() }}
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
