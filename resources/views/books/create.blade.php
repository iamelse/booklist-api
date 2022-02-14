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
            <div class="col-xl-6">
                <div class="card my-2">
                    <form class="m-5">
                        <div class="row d-flex justify-content-center">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('Title') }}</label>
                                <input type="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Book title...">
                                
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">{{ __('Writer') }}</label>
                                <select class="form-control form-control-alternative" aria-label="Default select example">
                                    <option selected>Select</option>
                                </select>

                                @if ($errors->has('writer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('writer') }}</strong>
                                    </span>
                                @endif    
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">{{ __('Descriptions') }}</label>
                                <textarea name="descriptions" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" rows="3" placeholder="Write a descriptions about the book here ..."></textarea>
                                
                                @if ($errors->has('descriptions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descriptions') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">{{ __('Cover Image') }}</label>
                                <input name="image" class="form-control form-control-alternative{{ $errors->has('image') ? ' is-invalid' : '' }}" type="file" id="image">
                            </div>
                          </div>
                          <div class="row mx-0">
                            <div class="form-group col-6">
                                <label class="form-control-label">{{ __('Book Page') }}</label>
                                <input type="page" class="form-control form-control-alternative{{ $errors->has('page') ? ' is-invalid' : '' }}" placeholder="Total book pages...">
                                
                                @if ($errors->has('page'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('page') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-6">
                                <label class="form-control-label">{{ __('Book Release') }}</label>
                                <input type="year" class="form-control form-control-alternative{{ $errors->has('year') ? ' is-invalid' : '' }}" placeholder="Year when book release...">
                            </div>
                          </div>
                        </div>
                    </form>
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