@extends('kerangka.kerangka')
@section('title', 'Add Product Carumby')
@section('product', 'active')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Product</h4>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Kode Product</label>
                        <input type="text" name="product_code" class="form-control" id="codeproduct" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Product</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar Product</label>
                        <p class="text-secondary-emphasis">Ukuran gambar dalam format PNG,JPG, atau JPEG, Resolusi gambar
                            minimal 600 x 600 px dan ukuran file maksimal 5 mb.</p>
                        <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                    </div>
                </form>
            </div>
        </div>

    </div>
    {{-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">ukuran</h4>
                <form action="{{route('size.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">kode</label>
                        <input type="text" name="product_code" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nukuran</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>

    </div> --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deskripsi Produk</h4>
                <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" name="description" style="height: 200px" id="exampleTextarea1" rows="12" cols="12"></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bagan Ukuran</h4>
                <form action="">
                    <div class="form-group d-flex grid gap-3">
                        <div class="row row-cols">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label mb-2" for="flexRadioDefault1">
                                    Default radio
                                </label>
                                <img src="assets/carrumby4.png" alt="">
                            </div>
                        </div>
                        <div class="row row-cols">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="carumby"
                                    id="flexRadioDefault2">
                                <label class="form-check-label mb-2" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                                <img src="assets/carrumby4.png" id="carumby" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Video Product</label>
                        <p class="text-secondary-emphasis">vidio harus memiliki aspek rasio antara 9:16 hingga 16:9 dengan
                            size maksimal 100 MB</p>
                        <input class="form-control form-control-sm" name="video" id="formFileSm" type="file">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bagan Ukuran</h4>
                <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                <form action="">
                    <div class="form-group">
                        <div class="card bg-secondary p-3 row">
                            <h4 class="card-title">
                                Warna
                            </h4>
                            <div class="d-flex grid gap-3">
                                <span class="btn rounded-pill bg-light text-dark">Merah</span>
                                <span class="btn rounded-pill bg-light text-dark">Hijau</span>
                                <span class="btn rounded-pill bg-light text-dark">Ungu</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" style="background-color: #FF0000;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    +
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" >Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card bg-secondary p-3 row mt-3">
                            <h4 class="card-title">
                                Ukuran
                            </h4>

                            <div class="d-flex grid gap-3">
                                <input type="checkbox" class="btn-check" id="opsi1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="opsi1">m</label><br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" style="background-color: #FF0000;" data-bs-toggle="modal"
                                    data-bs-target="#ukuran">
                                    +
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ukuran" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Ukuran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('upsize')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="product_code" value="{{$code}}" class="form-control" id="product_code" placeholder="">
                                                        <label for="floatingInput">Kode Produk</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="">
                                                        <label for="floatingInput">Ukuran</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-danger">Tambah</button>
                                                    <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                </form>
                                                </div>
                                                <div class="modal-footer">


                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"">
                        <button type="submit" class="btn btn-danger" style="border-radius: 10px; background-color: #FF0000;">Lanjut</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
