<!-- Fixed navbar -->
<!-- request() is used to determine which route is active and update the menu-->
<div class="container">
  <ul class="nav nav-tabs justify-content-center" style="background-color: #69bfc1;" id="books_nav">
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('Books*')) ? 'active' : '' }}" id="books_tab" href="{{ route('Books.index') }}">Books</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('Genres*')) ? 'active' : '' }}" id="genres_tab" href="{{ route('Genres.index') }}">Genres</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('Authors*')) ? 'active' : '' }}" id="authors_tab" href="{{ route('Authors.index') }}">Authors</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('Series*')) ? 'active' : '' }}" id="series_tab" href="{{ route('Series.index') }}">Series</a>
    </li>
  </ul>
</div>