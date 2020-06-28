@extends('layouts')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Branch Area</h1>
            <div class="list-group">
                @foreach($branchesData->data as $branch)
                    <a href="{{ route('adviser.index') }}?branch_id={{ $branch->id }}" class="list-group-item">{{ $branch->name }}</a>
                @endforeach
            </div>

        </div>
      <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                @forelse ($adviserData->data as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('adviser.show', ['id' => $item->id]) }}">
                            <img class="card-img-top" src="{{ env('URL_IMAGE').$item->foto }}" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="{{ route('adviser.show', ['id' => $item->id]) }}">{{ $item->name }}</a>
                            </h4>
                            <p class="card-text">{!! substr($item->description, 0, 100) !!}</p>
                        </div>
                    </div>
                </div>
                @empty
                <p>Data is Empty.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
