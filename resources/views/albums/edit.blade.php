<h1>Modifica album</h1>

<form action="{{ route('albums.update', $album) }}" method="post">
	@csrf
	@method('PUT')

	<div>
		<label>Title</label>
		<input type="text" name="title" value="{{ $album->title }}">
	</div>

  <div>
    <label>Artist</label>
    <input type="text" name="artist" value="{{ $album->artist }}">

  </div>

	<div>
		<label>Year</label>
    <input type="text" name="year" value="{{ $album->year }}">

	</div>

	{{-- <div>
		<label>User</label>
		<select name="user_id">
			@foreach ($users as $user)
				<option value="{{ $user->id }}" {{ ($user->id == $post->user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
			@endforeach
		</select>
	</div> --}}

	<div>
		@foreach ($tags as $tag)
			<div>
				<input type="checkbox" name="tags[]" {{ ($album->tags->contains($tag)) ? 'checked' : '' }} value="{{ $tag->id }}">
				<span>{{ $tag->name }}</span>
			</div>
		@endforeach
	</div>

	<div>
		<input type="submit" value="Salva modifica">
	</div>
</form>
