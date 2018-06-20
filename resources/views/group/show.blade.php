@extends('layouts.app', ['title' => 'Beheer de groep'])

@section('content')
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Beheer groep {{ $group->title }} </h1>
                </div>
            </div>
			
		</div>
		<div class="row row__cards">
		    <div class="col-md-6">
		        <a href=" {{ route('group.created', $group) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bekijk de email</h5>
		                    <img src="/img/feather.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('group.created', $group) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Start de sessie</h5>
		                    <img src="/img/group.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('group.created', $group) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bewerk of verwijder deze groep</h5>
		                    <img src="/img/feather.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('group.created', $group) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Beheer deelnemers</h5>
		                    <img src="/img/group.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
	</div>
@stop

@section('additional-scripts')
@endsection