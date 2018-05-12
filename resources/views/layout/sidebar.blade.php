        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              @if(isset($archives))
              @foreach($archives as $stats)
              <li>
                <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']}} {{$stats['year']}}</a>
              </li>
              @endforeach
              @endif
            </ol>
          </div> 
          <div class="p-3">
            <h4 class="font-italic">Tags</h4>
            <ol class="list-unstyled mb-0">
              @if(isset($tags))
              @foreach($tags as $tag)
              <li>
                <a href="/posts/tags/{{$tag}}">
                  {{$tag}}
                </a>
              </li>
              @endforeach
              @endif
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->