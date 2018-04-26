@if ($paginator->hasPages())
  <nav class="blog-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-outline-primary disabled" href="#">Older</a>
            
        @else
            <a class="btn btn-outline-primary" href="{{ $paginator->previousPageUrl() }}">Older</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-outline-secondary" href="{{ $paginator->nextPageUrl() }}">Newer</a> 
        @else
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a> 
        @endif


        
    </nav>

@endif
