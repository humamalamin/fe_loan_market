@extends('layouts')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">
      <!-- /.col-lg-3 -->

        <div class="col-lg-12">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            </div>

            <div class="row">

                @forelse ($branchesData->data as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('branch.show', ['id' => $item->id]) }}">
                            <img class="card-img-top" src="http://placehold.it/700x400" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('branch.show', ['id' => $item->id]) }}">{{ $item->name }}</a>
                            </h4>
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
