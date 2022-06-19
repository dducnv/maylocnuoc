@extends('layout')
{{--meta seo--}}
@section("page_title","Liện Hệ")
@section("meta_desc","$seo->meta_desc")
@section("meta_keywords","$seo->meta_keywords")
@section("meta_image","$seo->meta_image")
{{--.meta seo--}}
@section('main')
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{ asset("/") }}">Trang chủ</a>
                </li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<section class="container stylization maincont">
    <div class="contact-area pt-115 pb-120">
        <div class="container">
            <div class="text-center">
                <h1 class="font-weight-bold">Công ty cổ phần công nghệ xử lý nước HABECOM</h1>
            </div>
            <div class="contact-info-wrap-3 pb-85 text-center mt-3">
                <h3>Thông tin liên hệ</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-contact-info-3 text-center mb-30">
                            <i class="icon-location-pin "></i>
                            <h4>Trụ sở: 27 đường Đại Kim, Kim Giang, Hoàng Mai, Hà Nội</h4>
                            <p>Văn phòng: P1732 HH03A, khu đô thị CENCO 5, Hà Đông, Hà Nội                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                            <ul>
                                <li><i class="icon-screen-smartphone"></i><a style="font-size: 18px" href="tel:0934616287">0934616287</a></li>
                                <li><i class="icon-envelope "></i> <a style="font-size: 18px" href="mailto:"> info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="text-center">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScowsceeD6P5M7GiP3b055Dv2BGik6Lv7uyXuDwQmmPI4LyXQ/viewform?embedded=true" class="responsive-iframe-form" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
            </div>
            {{-- <div class="get-in-touch-wrap">
                <h3>Get In Touch</h3>
                <div class="contact-from contact-shadow">
                    <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <input name="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button class="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div> --}}
            <div class="contact-map">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14907.643915978158!2d105.7807207!3d20.9159009!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc458161d713fd510!2zQ8OUTkcgVFkgQ-G7lCBQSOG6pk4gQ8OUTkcgTkdI4buGIFjhu6wgTMOdIE7Gr-G7mkMgSEFCRUNPTQ!5e0!3m2!1svi!2s!4v1655625594078!5m2!1svi!2s" class="responsive-iframe-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
