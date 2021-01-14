@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-white align-bottom">
                    <h1 class="font-weight-light">BINUS TRAVEL</h1>
                    <p class="lead">Mengantar ke mana saja yang Anda suka</p>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Page Content -->
    <section class="py-5 bg-info">
        <div class="container">
            <h3>Statistik Pengunjung</h3>
            <div class="row mt-4">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-light mb-4">
                        <div class="card-body" style="font-size:62px">{!! $count_hari !!}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            Kunjungan Hari Ini <b>{!! date("d M Y"); !!}</b>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-light mb-4">
                        <div class="card-body" style="font-size:62px">{!! $count_bulan !!}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            Kunjungan Per Bulan <b>{!! date("F"); !!}</b>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-light mb-4">
                        <div class="card-body" style="font-size:62px">{!! $count_tahun !!}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            Kunjungan Per Tahun <b>{!! date("Y"); !!}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="caritahu">
        <div class="container">
            <h2 class="text-bold text-center">Cari Tahu Produk Kami</h2>

            <div class="row mt-5">
                <div class="col-md-4 mt-md-0 mt-3 text-center">
                    <img src="img/armada.png" style="width:50%">
                </div>
                <div class="col-md-8 mt-md-0 mt-3">
                    <h4>Armada Pariwisata</h4>
                    <p>Kami mempunyai armada yang lengkap, mulai dari minibus, double decker bus, sleeper bus dan van. Fasilitas tersebut dapat dipesan menggunakan platform kami.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-8 mt-md-0 mt-3">
                    <h4>Perusahaan Otobus</h4>
                    <p>Adalah penyedia armada bus dengan berbagai macam model yang sangat lengkap. Fasilitas tersebut dapat dipesan menggunakan platform kami.</p>
                </div>
                <div class="col-md-4 mt-md-0 mt-3 text-center">
                    <img src="img/armada.png" style="width:50%">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mt-md-0 mt-3 text-center">
                    <img src="img/armada.png" style="width:50%">
                </div>
                <div class="col-md-8 mt-md-0 mt-3">
                    <h4>Kerjasama dengan PO</h4>
                    <p>Kami bekerjasama dengan banyak perusahaan otobus dengan pelayanan baik dan terpercaya. Fasilitas tersebut dapat dipesan menggunakan platform kami.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary text-white">
        <div class="container">
            <h3>Armada Kami</h3>
            <p>Kami selalu memilih armada terbaik untuk memastikan keselamatan dan pengalaman terbaik untuk perjalanan Anda. Anda hanya bisa mendapatkan itu hanya dengan kami.</p>

            <div class="row mt-5 pb-3">
                <div class="col-md-3 mt-md-0 mt-3">
                    <img src="img/product_1.png" class="rounded float-left pb-3" alt="Product 1" style="width:100%">
                    <h5>Double Decker Bus</h5>
                    <div>Bus dengan kursi tebal empuk</div>
                </div>
                <div class="col-md-3 mt-md-0 mt-3">
                    <img src="img/product_2.png" class="rounded float-left pb-3" alt="Product 1" style="width:100%">
                    <h5>Minibus</h5>
                    <div>Cocok untuk rekreasi keluarga</div>
                </div>
                <div class="col-md-3 mt-md-0 mt-3">
                    <img src="img/product_3.png" class="rounded float-left pb-3" alt="Product 1" style="width:100%">
                    <h5>Sleeper Bus</h5>
                    <div>Diskusi kaum rebahan</div>
                </div>
                <div class="col-md-3 mt-md-0 mt-3">
                    <img src="img/product_4.png" class="rounded float-left pb-3" alt="Product 1" style="width:100%">
                    <h5>Van</h5>
                    <div>Hangout jadi asik</div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('bukutamu') }}"><button type="button" class="btn btn-info">Isi Buku Tamu</button></a>
                <a href="{{ route('katalogproduct') }}"><button type="button" class="btn btn-info">Order Armada</button></a>
            </div>
        </div>
    </section>

    <section class="py-5" id="tentangkami">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-md-0 mt-3"></div>
                <div class="col-md-9 mt-md-0 mt-3 text-right">
                    <h3>Tentang Kami</h3>
                    <p>Kami mempunyai tim berpengalaman yang siap membantu Anda menikmati perjalanan yang tak terlupakan.</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member6.jpg" class="card-img-top" alt="Member 6">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Joko Widodo</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">Direktur</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member1.jpeg" class="card-img-top" alt="Member 1">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Asep Wahyudin</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">General Manager</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member2.jpg" class="card-img-top" alt="Member 2">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Ardiansyah Eka</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">Mgr Accounting</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member3.jpg" class="card-img-top" alt="Member 3">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Imam Sutono</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">Mgr Marketing</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member4.jpg" class="card-img-top" alt="Member 4">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Rizal Hamim</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">Manager HRD</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-3">
                    <div class="card border-0 shadow">
                        <img src="img/member5.jpg" class="card-img-top" alt="Member 5">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Thefan Sunjaya</h6>
                            <div class="card-text text-black-50" style="font-size:14px;">Sales Tour & Travel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection