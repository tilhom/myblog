@extends ('layout.blank')

@section ('content')
<div class="col-md-8 blog-main">
  <h3 class="pb-3 mb-4 font-italic border-bottom">
    Create a Post
  </h3>
  @include('layout.messages')
  <form method="POST" action="/posts">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

</div><!-- /.blog-main -->
@endsection