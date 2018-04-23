
          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/post/{{$post->id}}">{{$post->title}}</a>
            </h2>
            <p class="blog-post-meta">{{$post->created_at->format('d-m-Y H:i:s') }} <a href="#"></a></p>

            {!! $post->body !!}
          </div><!-- /.blog-post -->
