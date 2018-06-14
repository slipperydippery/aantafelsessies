@if (Session::has('inventarisatie'))
	@php ($found = false)
	@foreach (Auth::user()->inventarisaties as $inventarisatie)
		@if ($inventarisatie->id == session('inventarisatie'))
			@php ($found = true)
		@endif
	@endforeach
	@if (! $found)

		<div class="alert alert-info container-fluid" role="alert">
			<div class="container">
				U heeft een inventarisatie die nog niet is opgeslagen. U kunt deze nu <a href=" {{ route('inventarisatie.updateuser', session('inventarisatie')) }} ">opslaan</a> of <a href=" {{ route('inventarisatie.destroy', session('inventarisatie')) }} ">verwijderen</a>
			 </div>
		</div>

	@endif
@endif