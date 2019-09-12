@extends('layouts.app', ['title' => 'Sessie - vraag ' . $question->id])

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">
	                	Thema {{ $theme->id }}: {{ $theme->name }} 
	                	@if ($theme->info)
	                		<i class="material-icons clickable muted h1" data-toggle="tooltip" data-placement="top" title=" {{ $theme->info }} "> info </i>
	                	@endif
	                </h1>
	            </div>
	        </div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="card card__question">
                    <div class="card-body">
                        

                        <span class="card-text card-text__question"> 
			                <h5> {{ $question->title }} </h5>
			                {!! $question->bodytooltip !!} 
		            	</span>
						<countdown date="60"></countdown>
                        <scan-slider
	                        :nvt=" {{ $question->nvt }} "
                        	:answer_id=" {{ $answer->id }} "
                        >
                        </scan-slider>
                        
                    </div>
                    <div class="card-footer">
	                    <p>Geef met een cijfer aan in hoeverre de stelling van toepassing is.</p>
                    </div>
				</div>
			</div>
		</div>
	</div>

	@if ($question->popup)
		<div class="modal fade" id="questionpopup" tabindex="-1" role="dialog" aria-labelledby="questionpopupLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="questionpopupLabel"> {{ $question->popup->title }} </h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                {{ $question->popup->body }}
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" data-dismiss="modal">sluit</button>
		            </div>
		        </div>
		    </div>
		</div>

	@endif
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
	$('document').ready(function(){
		$('#questionpopup').modal('show')
	});
</script>
@endsection