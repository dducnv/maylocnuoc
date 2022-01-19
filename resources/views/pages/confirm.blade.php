@extends('layout')
@section('main')
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <h1 class="mt-5 fs-1 fw-bold">ĐẶT HÀNG</h1>
                        <h3 class="mt-5 fs-3 fw-bold">THÀNH CÔNG</h3>
                        <p class="lead my-4">Oops! Looks like you followed a bad link. If you think this is a problem with us, please tell us.</p>
                        <a href="{{asset('/')}}" class="btn btn-1-bg-purple btn-gray-800 d-inline-flex align-items-center justify-content-center mb-4">
                            Back to homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
