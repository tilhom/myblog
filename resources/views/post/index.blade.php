@extends ('layout.main')

@section ('content')
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          @foreach ($posts as $post)
             @include('post.post')
          @endforeach
         
          <nav class="blog-pagination">
           <!--  <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a> -->
           {{ $posts->links('post.simple-bootstrap-4') }}
          </nav>
<?php dump($archives) ?>
        </div><!-- /.blog-main -->
@endsection