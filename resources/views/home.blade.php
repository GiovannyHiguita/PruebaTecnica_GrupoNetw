@extends('layouts.layoutregistros')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>B I E N V E N I D O</h2></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-12 text-center">
                            <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main" href="/productos/index">Al Inicio</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
