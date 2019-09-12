@extends('layouts.app', ['title' => 'Feedback'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">feedback - {{ $feedback->scan->user->name }}</h1>
	            </div>
	        </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Vraag</th>
							<th scope="col">Antwoord</th>
							<th scope="col">Toelichting bij onvoldoende</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($feedback->scan->feedbackanswers as $feedbackanswer)
							<tr>
								<td> {{ $feedbackanswer->feedbackquestion->title }} </td>
								<td> {{ $feedbackanswer->answer }} </td>
								<td> {{ $feedbackanswer->justification }} </td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Aanvullende tips</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> {{ $feedback->tips }} </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop


@section('additional-scripts')
@endsection
	