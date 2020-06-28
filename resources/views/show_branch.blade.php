@extends('layouts')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <h2>{{ $branchData->data->name }}</h2>
            <p>Address : {{ $branchData->data->address }}</p>
            <p>{!! $branchData->data->about !!}</p>
            <iframe src="https://maps.google.com/maps?q={{ $branchData->data->lat }},{{ $branchData->data->lng }}&z=17&output=embed"class="embed-responsive-item" style="border:0;width:500px; height:300px" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection
