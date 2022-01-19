@extends('layout')
@section('main')
    <section class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="mb-3">
                        <label>Họ Và Tên</label>
                        <input class="form-control" type="text" required>
                        <div class="invalid-feedback">
                            hehe
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Số Điện Thoại</label>
                        <input class="form-control" type="text" required>
                        <div class="invalid-feedback">
                            hehe
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>E-mail</label>
                        <input class="form-control" type="text" required>
                        <div class="invalid-feedback">
                            hehe
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Địa Chỉ Nhận Hàng</label>
                        <textarea class="form-control p-2" type="text" required></textarea>
                        <div class="invalid-feedback">
                            hehe
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Lời Nhắn</label>
                        <textarea class="form-control p-2" type="text" required></textarea>
                        <div class="invalid-feedback">
                            hehe
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn c btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </section>
@endsection
