@extends('layouts.app')

@section('content')

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">Book List</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="/tools/books/create/" class="btn btn-sm btn-primary">New Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                            <small>{{ $book->writers->pluck('name')->join(', '); }}</small>  
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