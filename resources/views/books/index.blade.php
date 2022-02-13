@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            @foreach ($books as $book)
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="https://via.placeholder.com/480x640.png/000022?text=animals+laborum" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title">{{ $book->title }}</h2>
                      <p class="text fs-7">
                      @foreach ($book->writers as $writer)
                          {{ $writer->name }}
                      @endforeach
                      </p>
                      <a href="#" class="btn btn-sm btn-primary">Details</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush