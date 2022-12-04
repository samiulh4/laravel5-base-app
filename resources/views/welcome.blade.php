@extends('layouts.web')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Blog --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('blog/index') }}">
                            <img src="{{ asset('assets/img/services/blog.png') }}" class="img-fluid img-thumbnail" alt="Blog"/>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Ecommerce --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('blog/index') }}">
                            <img src="{{ asset('assets/img/services/ecommerce.png') }}" class="img-fluid img-thumbnail" alt="Blog"/>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection