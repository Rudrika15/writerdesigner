@extends('layout.app')
@section('title', 'Brand beans | Slogans List')
@section('content')
    <div class='container'>
        <div class="d-flex justify-content-end bg-danger">
            <!-- Add this to your Blade template -->
            @if (session()->has('success'))
                <div class="toast align-items-center text-white show bg-success" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>

                        {{-- <button type="button" class="btn-close me-2 m-auto bg-transparent " data-bs-dismiss="toast"
                            aria-label="Close">X</button> --}}

                    </div>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                            style="width: 0%"></div>
                    </div>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="toast align-items-center text-white show bg-danger" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('error') }}
                        </div>
                        {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button> --}}
                    </div>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                            style="width: 0%"></div>
                    </div>
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="toast align-items-center text-white show bg-warning" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('warning') }}
                        </div>
                        {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button> --}}
                    </div>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                            style="width: 0%"></div>
                    </div>
                </div>
            @endif
        </div>
        <div class='row pt-5'>

            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Slogans List</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('designer.design.table')
                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
