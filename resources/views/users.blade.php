@extends('layouts.admin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data User dan Role</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Data User dan Role</li>
                </ol>
            </nav>
        </div>

        <div class="bg-body shadow shadow-md rounded rounded-md p-3">
            <table class="table" id="usersTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <script>
        let table = new DataTable('#usersTable');
    </script>
@endsection
