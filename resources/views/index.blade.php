<style>
    .col {
        font-size: 24px;
    }

    .col-2 {
        border-radius: 20px;
        background-color: #F0F5FF;
        min-width: 20%;
    }

    .col-2 img {
        width: 30%;
    }

    .col-2 span {
        font-size: 20px;
    }

    .desc {
        background-color: #4F72F2;
        border-radius: 20px;
        padding: 2%;
    }

    .small-profile img {
        border-radius: 100%;
        width: 16%;
        margin-right: 5%;
    }

    .topmenu img {
        border-radius: 100%;
        width: 3%;
        height: 3%;
    }

    .welcome h3 {
        font-size: 48;
        color: #131073;
    }

    .welcome p {
        color: #131073;
        font-size: 18px;
    }

    .our-corner p {
        font-size: 24px;
        color: #131073;
    }

</style>
@extends('layout/layout')
@section('title', 'page index')

@section('body-container')
    <img src="img/Artboard-1.jpg" style="width: 100%">

    <!-- Clubs -->
    <div class="row" style="padding:0 2%;width:100%">
        <div class="our-corner col mt-5 mb-1 fw-bold">
            <p>Our Corners</p>
        </div>
    </div>
    <div class=" row justify-content-between" style="width:100%;padding:2%">
        <div class="bidang col-2 fw-bold">
            <img src="img/dg.png">
            <span>Design Graphic</span>
        </div>
        <div class="bidang col-2 fw-bold">
            <img src="img/ve.png">
            <span>Video Editing</span>
        </div>
        <div class="bidang col-2 fw-bold">
            <img src="img/dg.png">
            <span>Web Design</span>
        </div>
        <div class="bidang col-2 fw-bold">
            <img src="img/dg.png">
            <span>Web Design</span>
        </div>
    </div>

    <!-- End Clubs -->

    <!-- Deskripsi Club -->
    <div class="row desc mt-4 mb-4 mx-3">
        <div class="col">
            <p class="fs-5">Halo kami dari team corner design grafis! disini kita belajar
                banyak hal termasuk AI,
                PS, XD, Figma dan lain lain! disini kita juga bisa ngobrol-ngobrol santai sama kaka kelas dan adek adek
                kelas buat saling mengenal, yuk join!! </p>
        </div>
    </div>

    <!-- End deskripsi club -->

    <!-- Projects -->
    <section id="projek">
        <div class="container mt-4">
            <div class="row" style="padding-left:60px;width:100%">
                @foreach ($posts as $p)
                    
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 20rem;border-radius: 20px;">
                        <img src="img/{{ $p->file }}" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
                        <div class="card-body"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                        <p class="card-text">
                            <h6 class="text-center mb-3 fw-bold">{{ $p->title }}</h6>
                            <div class="small-profile d-flex">
                                <img src="img/profile.jpg">
                                <div>
                                    <span>Ayam goreng</span>
                                    <br>
                                    <span>ayamgoreng@gmail.com</span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
                
            </div>
        </div>
    </section>
@endsection