@extends('homelayout.layout')

@section('title')
    Spareparts
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mt-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="float-start">List Spareparts</h3>
                        <a href="" class="btn btn-primary float-end text-white" data-bs-toggle="modal"
                            data-bs-target="#modalAddSparepart">Add Sparepart</a>
                    </div>
                    <div class="card-body">
                        @if ($sparepart->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading text-center">No Sparepart</h4>
                                <p class="text-center">Please add sparepart</p>
                            </div>
                        @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sparepart as $spare)
                                        <tr>
                                            <td>{{ $spare->name }}</td>
                                            <td>{{ $spare->category }}</td>
                                            <td>{{ $spare->price }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary text-white" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditSparepart" data-id="{{ $spare->id }}"
                                                    data-name="{{ $spare->name }}" data-category="{{ $spare->category }}"
                                                    data-price="{{ $spare->price }}"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('sparepart.destroy', $spare->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Modal Add --}}
    <div class="modal fade" id="modalAddSparepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Sparepart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sparepart.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name Sparepart</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category Sparepart</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price Sparepart</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
