
          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h2>
            <p class="blog-post-meta">
            	<a href="#">{{$post->user->name}}</a> on
            	{{$post->created_at->format('d-m-Y H:i:s') }}
            </p>

            {!! $post->body !!}
            @if(count($post->tags))
            <hr>
            <p>
              <strong>Tags:</strong>
              @foreach($post->tags as $tag)
                <a href="/posts/tags/{{$tag->name}}">
                  {{$tag->name}}
                </a>
              @endforeach
            </p>
            @endif
          </div><!-- /.blog-post -->
