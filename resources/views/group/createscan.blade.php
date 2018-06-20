@extends('layouts.app')

@section('content')
<div class="container container--page">
    <div class="row">
        <div class="col-md-12">
            <div class="page--title">
                <h1 class="pagetitle">Bevestig deelname aan: {{ $group->title }}</h1>
            </div>
        	<create-groupscan
        		:instanties=" {{ $instanties }} "
        		:group=" {{ $group }} "
        	>
        	</create-groupscan>
        </div>
    </div>
</div>
@endsection
