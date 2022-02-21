@extends('layouts.app')

@section('content')

    <div class="header bg-gradient-primary pb-5 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card my-2">
                    <div class="row">
                        <div class="col-4 m-3">
                            @if ($book->image) 
                                <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="book image">
                            @else
                                <img src="https://via.placeholder.com/480x640.png/009966?text=animals+eos" class="card-img-top" alt="book image">
                            @endif
                        </div>
                        <div class="col-7 mt-3">
                            <h1 class="display-3">{{ $book->title }}</h1>
                            <h4>{{ $book->writers->pluck('name')->join(', '); }}</h4> <br>
                            <h4>Information: </h4>
                            <p class="my-2">
                                Year: {{ $book->year }} <br> 
                                Pages: {{ $book->page }} <br>
                                About: <br> {{ $book->descriptions }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush