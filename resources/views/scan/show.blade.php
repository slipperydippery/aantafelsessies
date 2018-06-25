@extends('layouts.app', ['title' => 'Beheer de sessie'])

@section('content')
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Sessie {{ $scan->title }} </h1>
                </div>
            </div>
			
		</div>
		<div class="row row__cards">
		    <div class="col-md-6">
		        <a href=" {{ route('scan.introductie', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Start de sessie</h5>
		                    <img src="/img/scan.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('scan.show', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bewerk deze sessie</h5>
		                    <img src="/img/feather.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('scan.show', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Beheer deelnemers</h5>
		                    <img src="/img/scan.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" # " title="" data-toggle="modal" data-target="#deleteModal">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Verwijder deze sessie</h5>
		                    <img src="/img/scan.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" # " title="" data-toggle="modal" data-target="#deleteModal">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bekijk de email</h5>
		                    <img src="/img/scan.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" # " title="" data-toggle="modal" data-target="#deleteModal">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Selectie Gesprekspartners</h5>
		                    <img src="/img/scan.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
	</div>

	<!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Verwijder deze sessie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Hiermee wordt deze sessie en alle invoer permanent verwijderd.</p>
                    <p>Weet je het zeker?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                    <form action="{{ route('scan.destroy', $scan) }}" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    	<!-- Add Submit Field -->
                	    <input type="submit" value="Verwijder sessie" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('additional-scripts')
@endsection