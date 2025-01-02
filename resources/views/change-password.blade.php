@extends('layouts.admin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Ganti Password</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Ganti Password</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-6 bg-white p-4">
                    <form method="POST" action="{{ route('change-password-post') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="password-lama" class="form-label">Password Lama</label>
                            <input type="password" name="old_password" class="form-control" id="password-lama">
                            @error('old_password')
                                <div class="text-danger mt-1 small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password-baru" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control" id="password-baru">
                            @error('password')
                                <div class="text-danger mt-1 small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="konfirmasi-password-baru" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="konfirmasi-password-baru">
                            @error('password_confirmation')
                                <div class="text-danger mt-1 small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
