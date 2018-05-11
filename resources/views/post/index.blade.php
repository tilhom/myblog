@extends ('layout.main')

@section ('content')
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          @if(count($posts))
          @foreach ($posts as $post)
             @include('post.post')
          @endforeach
          @else
            <h3>Nothing published yet..</h3>
          @endif
          <nav class="blog-pagination">
           <!--  <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a> -->
           {{ $posts->links('post.simple-bootstrap-4') }}
          </nav>
        </div><!-- /.blog-main -->
@endsection