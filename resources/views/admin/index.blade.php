@extends('layouts.layout')




@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h4 class="card-title">Grid Column</h4>
                <p>Using a single set of grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any</p>
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-12">
                <div class="grid-col">.Col-lg-12</div>
            </div>
        </div>
    </div>
</div>
@endsection