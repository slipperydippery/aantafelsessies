@extends('layouts.app', ['title' => 'Sessie - thema ' . $theme->id . ' resultaten'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">
                        Actiepunten scan {{ $scan->title }}
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
                                Actiepunten thema {{ $theme->id }}: {{ $theme->name }}
                                @if ($theme->info)
                                    <i class="material-icons clickable muted" data-toggle="tooltip" data-placement="top" title=" {{ $theme->info }} "> info </i>
                                @endif
                            </h5>
                        </div>
                        
                        @php
                            $measurecount = 0;
                        @endphp
                        @foreach ($scan->group->owner->measures->where('active', true) as $measure)
                            @if($measure->question->theme->id == $theme->id)
                                @php
                                    $measurecount++;
                                @endphp
                                <div class="section__panel--title">
                                    {{ $measure->question->title }}
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        Actie omschrijving:
                                    </div>
                                    <div class="col-sm-9 form-group">
                                        <big-measure
                                            :measure_id = {{ $measure->id }}
                                            :is_manager=" {{ $is_manager = $scan->group->owner->id == $scan->id ? 1 : 0 }} "
                                        >
                                        </big-measure>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        Trekker:
                                    </div>
                                    <div class="col-sm-9">
                                        <frontrunner
                                            :measure_id = {{ $measure->id }}
                                            :group_id = {{ $measure->scan->group->id }}
                                            :is_manager=" {{ $is_manager = $scan->group->owner->id == $scan->id ? 1 : 0 }} "
                                        >
                                        </frontrunner>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if ($measurecount == 0)
                            <p class="mt-4"><em>Geen actiepunten toegewezen</em></p>
                        @endif
                        
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