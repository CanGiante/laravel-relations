<ul>
  @foreach ($albums as $album)
    <li>
      <a href="{{ route('albums.show', $album) }}">
        <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
      </a>
    </li>
  @endforeach
</ul>
