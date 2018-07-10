@extends('layouts.app', ['title' => 'Sessie - kennismaken'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Kennismaken</h1>
                    <p>Vaak zal niet iedereen elkaar kennen. Daarom een voorstelrondje, waarbij iedereen aangeeft: wie ben je, namens welke organisatie doe je mee, je rol/functie en wat je hoopt dat uit deze sessie komt (wens of droom).</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <div class="row">
                    <div class="col-sm-2">
                        <div class="card card__2 card--partner owner {{ $group->owner->user->isOnline() ? '' : 'inactive' }} ">
                            <div class="card-icons">
                                <i class="material-icons"> star </i>
                                @if($group->owner->user->isOnline())
                                    <i class="material-icons"> wifi </i>
                                @else
                                    <i class="material-icons"> wifi_off </i>
                                @endif
                            </div>
                            <img src="/img/user.svg" alt="">
                            <div class="card-footer">
                                {{ $group->owner->user->name }} <br>
                                Beheerder
                            </div>
                        </div>
                    </div>

                    @foreach ($scan->scanmodel->instantietypes as $instantietype)
                    @foreach($scan->group->scans as $thisscan)
                        @if($thisscan->instantie->instantietype->id == $instantietype->id)
                        @if($thisscan->id != $group->owner->id)
                             <div class="col-sm-2">
                                 <div class="card card__2 card--partner instantietype-{{ $thisscan->instantie->instantietype->id }} {{ $thisscan->user->isOnline() ? '' : 'inactive' }} ">
                                     <div class="card-icons">
                                         @if($thisscan->user->isOnline())
                                             <i class="material-icons"> wifi </i>
                                         @else
                                             <i class="material-icons"> wifi_off </i>
                                         @endif
                                         @if ($scan->group->owner->id == $scan->id)
                                             <span class="card-closeicon">
                                                 <i class="material-icons clickable" data-toggle="modal" data-target="#deleteUserModal-{{ $thisscan->id }}"> close </i>
                                             </span>
                                         @endif
                                     </div>
                                     <img src="/img/user.svg" alt="">
                                     <div class="card-footer">
                                         {{ $thisscan->user->name }} <br>
                                         {{ $thisscan->instantie->name }}
                                     </div>
                                 </div>
                             </div>

                             @if ($scan->group->owner->id == $scan->id)
                                 <!-- Modal -->
                                 <div class="modal fade" id="deleteUserModal-{{ $thisscan->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title" id="deleteUserModalLabel">Verwijder {{ $thisscan->user->name }}</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                                 </button>
                                             </div>
                                             <div class="modal-body">
                                                 <p>Weet je zeker dat je <strong>{{ $thisscan->user->name }}</strong> van <strong>{{ $thisscan->instantie->name }}</strong> uit de sessie wilt verwijderen?</p>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                                                     <form action="{{ route('scan.destroy', $thisscan) }}" method="post" accept-charset="utf-8">
                                                         <input type="hidden" name="_method" value="DELETE">
                                                         {{ csrf_field() }}
                                                        <!-- Add Submit Field -->
                                                        <input type="submit" value="Verwijder sessie" class="btn btn-primary" />
                                                     </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endif
                        @endif
                        @endif
                    @endforeach
                    @endforeach
                    
                </div>
                <div class="row row__prevnext justify-content-between">
                    <div class="col-md-4">
                        <a href=" {{ route('scan.introductie', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
                    </div>
                    <div class="col-md-4">
                        <a href=" {{ route('scan.algemeenbeeld', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop