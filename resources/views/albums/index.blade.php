<ul>
  @foreach ($albums as $album)
    <li> <a href="{{ route('albums.show', $album) }}">{{$album->title}}</a> </li>
  @endforeach
</ul>
