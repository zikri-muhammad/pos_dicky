@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-3 mt-1">
                <div class="card">
                    <img class="card-img-top" src="{{ $status == rand(0,1) ? url('/img/kuning.jpg') : url('/img/putih.jpg') }}" style="width: 90px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">201</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-1">
                <div class="card">
                    <img class="card-img-top" src="{{ $status == rand(0,1) ? url('/img/kuning.jpg') : url('/img/putih.jpg') }}" style="width: 90px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">202</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-1">
                <div class="card">
                    <img class="card-img-top" src="{{ $status == rand(0,1) ? url('/img/kuning.jpg') : url('/img/putih.jpg') }}" style="width: 90px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">203</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-1">
                <div class="card">
                    <img class="card-img-top" src="{{ $status == rand(0,1) ? url('/img/kuning.jpg') : url('/img/putih.jpg') }}" style="width: 90px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">204</small>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection
