@extends('layouts')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-12">
            <h2>{{ $adviserData->data->name }}</h2>
            <p><i>E-mail : {{ $adviserData->data->email }} - No. Hp : {{ $adviserData->data->no_hp }}</i></p>
            <p>Branch : {{ $adviserData->data->branch->name }}</p>
            <img src="{{ env('URL_IMAGE').$adviserData->data->foto }}" alt="" style="width: 500px">
            <p>{!! $adviserData->data->description !!}</p>
        </div>
    </div>
</div>
@endsection
