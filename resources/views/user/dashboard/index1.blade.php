@extends('user.template.main')

@section('basic-style')
{{-- <link rel="stylesheet" href="{{ asset('template_dashboard') }}/assets/css/pages/error.css"> --}}
@endsection
@section('new-style')
    
@endsection



@section('content')

<div id="main-content">
    <div id="error">


        <div class="error-page container text-center">
            <div class="col-md-8 col-12 offset-md-2">
                <img class="img-error" src="{{ asset('template_dashboard') }}/assets/images/samples/invite-pana.png" alt="Not Found" width="60%" style="max-height: 10%;">
                <div class="text-center">
                    <h1 class="error-title">Mulai buat undangan!</h1>
                    <p class="fs-5 text-gray-600">Kamu belum punya undangan untuk dipublikasikan.</p>
                    <a href="index.html" class="btn btn-lg btn-outline-primary mt-3">Buat sekarang</a>
                </div>
            </div>
        </div>


    </div>

    {{-- footer --}}
    @include('user.template.footer')
</div>
@endsection

@section('basic-script')
    
@endsection
@section('new-script')
    
@endsection