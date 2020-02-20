@extends('layouts.template')

@section('content')
<div class="pt-4">
    <h5 class="font-weight-bold">
        Recommended
    </h5>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('images/advtime.png')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/advtime.png')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                            <div>
                                <a href="{{route('watch.Adventure-Time')}}">
                                <h6 class="font-weight-bold">Adventure Time</h6>
                                </a>
                                
                                <small class="text-muted">Adventure Time</small>
                                <br>    
                                <small class="text-muted">760k view . 1 day ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('images/loveshot.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/luvsut.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">EXO - Love Shot</h6>
                                <small class="text-muted">EXO</small>
                                <br>    
                                <small class="text-muted">25m view . 1 day ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('images/aiwancu.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/aiwancu2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">EXO - Obsession</h6>
                                <small class="text-muted">EXO</small>
                                <br>    
                                <small class="text-muted">30m view . 1 day ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('images/film.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('images/film.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">Imperfect</h6>
                                <small class="text-muted">Starvision</small>
                                <br>    
                                <small class="text-muted">807k view . 1 day ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
</div>
@endsection