@extends('layouts.app', ['title' => 'Sessie - thema ' . $theme->id . ' resultaten'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">
                        Resultaten scan {{ $scan->title }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($scan->scanmodel->themes as $theme)
                <div class="col-md-12">
                    <div class="section__panel">
                        <div class="section__panel--title">
                            <h5>
                                Resultaten thema {{ $theme->id }}: {{ $theme->name }}
                                @if ($theme->info)
                                    <i class="material-icons clickable muted" data-toggle="tooltip" data-placement="top" title=" {{ $theme->info }} "> info </i>
                                @endif
                            </h5>
                        </div>

                        <div class="row">
                            <scan-results
                                :group_id = " {{ $scan->group->id }} " 
                                :theme_id = " {{ $theme->id }} "
                            >
                            </scan-results>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('prevnext')

@stop

@section('additional-scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
              $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection