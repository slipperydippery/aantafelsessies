<!-- Groep naam Form Input -->
<div class="form-group">
    <label for="title">Groep naam</label>
    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title', request('title') ?? $group->title ?? null) }}" autofocus>

	@if ($errors->has('title'))
        <span class="invalid-feedback">
	        <strong>{{ $errors->first('title') }}</strong>
	    </span>
	@endif
</div>

<!-- Instantie Form Input -->
@foreach($instanties as $instantie)
	<div class="custom-control custom-radio">
		<input type="radio" class="custom-control-input {{ $errors->has('instantie_id') ? ' is-invalid' : '' }}" name="instantie_id" id="instantie_id{{ $instantie->id }}" value="{{ $instantie->id }}" required>
		<label class="custom-control-label" for="instantie_id{{ $instantie->id }}">
			{{ $instantie->name }}
		</label>

		@if ($errors->has('instantie_id'))
	        <div class="invalid-feedback">
				{{ $errors->first('instantie_id') }}
		    </div>
		@endif

	</div>
@endforeach

<!-- Add Submit Field -->
<div class="form-group">
    <input type="submit" value=" {{ $submittext }} " class="btn btn-primary form-control" />
</div>