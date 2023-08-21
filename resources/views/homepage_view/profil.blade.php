@extends('homelayout.layout')

@section('title')
    Profil
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Profil</h3>
                <div class="text-end">
                    <a href="{{ url()->previous() }}" class="btn btn-primary text-white"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">Nama</th>
                                <td>{{ $user->fullname }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Username</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Phone</th>
                                <td>{{ $user->no_hp }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 