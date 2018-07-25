@extends('layouts.app', ['title' => 'Sessie - thema ' . $theme->id . ' resultaten'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">
	                	Resultaten thema {{ $theme->id }}: {{ $theme->name }}
	                	@if ($theme->info)
	                		<i class="material-icons clickable muted h1" data-toggle="tooltip" data-placement="top" title=" {{ $theme->info }} "> info </i>
	                	@endif
	                </h1>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="section__panel">
					<div class="section__panel--title">
						<h5>resultaten</h5>
		                <span><em></em></span>
					</div>
					<div class="row">
						<div class="col-sm-12 table table__results">
							<div class="row">
								<div class="col-sm-2"></div>
								@foreach ($theme->questions as $question)
									<div class="col-sm-2">
										<strong>Vraag {{ $question->id }} <br></strong>
										<span data-toggle="tooltip" data-placement="top" title=" {{ $question->body }} ">{{ $question->title }}</span>
									</div>
								@endforeach
							</div>
							<div class="row">
									<div class="col-sm-2">Gemiddeld</div>
								@foreach ($theme->questions as $question)
									<div class="col-sm-2">

										<average-slider
											:scan_id=" {{ $scan->id }} "
											:question_id=" {{ $question->id }} "
										>
										</average-slider>

									</div>
								@endforeach
							</div>
							@foreach ($scan->group->scans as $thisscan)
								<div class="row">
									<div class="col-sm-2 nowrap instantietype-{{ $thisscan->instantie->instantietype->id }}-leftborder {{ ($thisscan->id == $scan->group->owner->id) ? 'owner-leftborder' : ''}} "> 
										{{ $thisscan->user->name }} 
									</div>
									@foreach ($theme->questions as $question)
										<div class="col-sm-2">
											<result-slider
												:answer_id=" {{ $thisscan->answers->where('question_id', $question->id)->first()->id }} "
											>
											</result-slider>
										</div>
									@endforeach
								</div>
							@endforeach
						</div>
					</div>
					<countdown date="600"></countdown>
					
				</div>
			</div>
		</div>
	</div>
@stop

@section('prevnext')
	<div class="row row__prevnext justify-content-between">
		<div class="col-md-4">
			<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
		</div>
		<div class="col-md-4">
			<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
		</div>
	</div>
@stop

@section('additional-scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
              $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection