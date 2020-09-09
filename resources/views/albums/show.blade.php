<ul>
  <li>{{ $album->title }}</li>
  <li>{{ $album->artist }}</li>
  <li>{{ $album->year }}</li>
</ul>

<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>
