
          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h2>
            <p class="blog-post-meta">
            	<a href="#">{{$post->user->name}}</a> on
            	{{$post->created_at->format('d-m-Y H:i:s') }}
            </p>

            {!! $post->body !!}
          </div><!-- /.blog-post -->
