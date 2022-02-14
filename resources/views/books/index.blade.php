@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            @foreach ($books as $book)
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <div class="card my-2">
                    <img src="{{ $book->image }}" class="card-img-top" alt="book image">
                    <div class="card-body">
                      <h3>{{ $book->title }}</h3>
                      <a href="#" class="btn btn-sm btn-primary">Science</a>
                      <div class="mt-2">
                      @foreach ($book->writers as $writer)
                          <small>{{ $writer->name }}</small>
                      @endforeach
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

        <div class="my-5 d-flex justify-content-center">
            {{ $books->onEachSide(-1)->links() }}
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush