<ul>
  <li>{{ $album->title }}</li>
  <li>{{ $album->artist }}</li>
  <li>{{ $album->year }}</li>
</ul>


{{-- @if (!empty($post->user))
	<div>
		Author: {{ $post->user->name }}
	</div>
@endif --}}

<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>

@if(!$album->tags->isEmpty())
	<div>
		<h3>Tags</h3>
		<ul>
			@foreach ($album->tags as $tag)
				<li>{{ $tag->name }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div>
	Updated at: {{ $album->updated_at->format('D d F Y') }}
</div>
