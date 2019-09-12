@extends('layouts.app', ['title' => 'Feedback'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Alle ontvangen feedback</h1>
	            </div>
	        </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Gebruiker</th>
							@foreach ($scanmodel->feedbackquestions as $feedbackquestion)
								<th scope="col" data-toggle="tooltip" data-placement="top" title=" {{ $feedbackquestion->title }} "> {{ $feedbackquestion->id }} </th>
							@endforeach
							<th scope="col">Toelichting bij onvoldoende</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($feedbacks as $feedback)
							<tr>
								<td><a href=" {{ route('feedback.show', $feedback) }} "> {{ $feedback->scan->user->name }} </a></td>
								@foreach ($feedback->answers() as $answer)
									<td> {{ $answer->answer }} </td>
								@endforeach
								<td> {{ $feedback->answer }} </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop


@section('additional-scripts')
@endsection
	