@extends('layouts.admin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Master Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Master Data</li>
                </ol>
            </nav>
        </div>

        <form action="{{ route('master.update', $master_data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mt-4">
                <div class="col-lg-6">
                    <h4 class="text-black mb-3" style="border-bottom: 1px solid gray; padding-bottom: 10px;">Data Gambar
                    </h4>
                    <div class="mb-4">
                        <label for="logo_text" class="form-label">Logo Text</label>
                        <img style="width: 400px; height: 100px; object-fit: cover" src="{{ $master_data->logo_text }}"
                            class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 16:9</span>
                        </span>
                        <input type="file" class="form-control" id="logo_text" name="logo_text"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="logo_atas_kiri" class="form-label">Logo Stand</label>
                        <img style="width: 100px; height: 100px; object-fit: cover" src="{{ $master_data->logo_atas_kiri }}"
                            class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 1:1</span>
                        </span>
                        <input type="file" class="form-control" id="logo_atas_kiri" name="logo_atas_kiri"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="logo_tengah" class="form-label">Logo Dinding</label>
                        <img style="width: 100px; height: 100px; object-fit: cover" src="{{ $master_data->logo_tengah }}"
                            class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 1:1</span>
                        </span>
                        <input type="file" class="form-control" id="logo_tengah" name="logo_tengah"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="logo_rak_atas" class="form-label">Logo Banner Atas</label>
                        <img style="width: 100px; height: 100px; object-fit: cover" src="{{ $master_data->logo_rak_atas }}"
                            class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 1:1</span>
                        </span>
                        <input type="file" class="form-control" id="logo_rak_atas" name="logo_rak_atas"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="logo_rak_tengah" class="form-label">Logo Banner Tengah</label>
                        <img style="width: 100px; height: 100px; object-fit: cover"
                            src="{{ $master_data->logo_rak_tengah }}" class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 1:1</span>
                        </span>
                        <input type="file" class="form-control" id="logo_rak_tengah" name="logo_rak_tengah"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="logo_rak_bawah" class="form-label">Logo Banner Bawah</label>
                        <img style="width: 100px; height: 100px; object-fit: cover" src="{{ $master_data->logo_rak_bawah }}"
                            class="d-block mb-3" alt="">
                        <span class="input-group-text mb-2">
                            <i class="bi bi-info-circle-fill mr-3"></i>
                            <span class="d-block mx-2 small">Harap masukkan gambar dengan rasio 1:1</span>
                        </span>
                        <input type="file" class="form-control" id="logo_rak_bawah" name="logo_rak_bawah"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-black mb-3" style="border-bottom: 1px solid gray; padding-bottom: 10px;">Data Link
                        dan
                        File
                    </h4>
                    <div class="mb-3">
                        <label for="link_youtube" class="form-label">Link Youtube</label>
                        <input type="text" class="form-control" id="link_youtube" name="link_youtube"
                            value="{{ $master_data->link_youtube }}" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="link_browser" class="form-label">Link Browser</label>
                        <input type="text" class="form-control" id="link_browser" name="link_browser"
                            value="{{ $master_data->link_browser }}" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="link_wa" class="form-label">Link Whatsapp</label>
                        <input type="text" class="form-control" id="link_wa" name="link_wa"
                            value="{{ $master_data->link_wa }}" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="link_pdf" class="form-label">File PDF</label>
                        <a href="{{ $master_data->link_pdf }}" target="_blank"
                            class="d-block text-danger shadow shadow-md rounded rounded-md p-3 bg-white mb-3">
                            <i style="font-size: 30px" class="bi bi-filetype-pdf"></i>
                            <span>{{ $master_data->link_pdf }}</span>
                        </a>
                        <input type="file" class="form-control" id="link_pdf" name="link_pdf"
                            value="{{ $master_data->link_pdf }}" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center">
                <button class="btn btn-success" style="width: 50%">Simpan</button>
            </div>
        </form>
    </main>
@endsection
