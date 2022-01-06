@extends('layouts.app')

@section('content')
<div class="updateproduct-section">s
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                        Update Product
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                            <div class="row mb-3 form-group">
                                <label for="category" class="col-sm-2 form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="category" class="form-select" name="category" value="{{ $item->category }}">
                                        <option selected>Animal...</option>
                                        <option>Sapi</option>
                                        <option>Kambing</option>
                                        <option>Domba</option>
                                        <option>Babi</option>
                                        <option>Ayam</option>
                                        <option>Ikan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" cols="30" rows="10" class="d-block w-100 form-control">{{ $item->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}">
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}">
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="Image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" id="Image" name="image" accept="image/*"> 
                        
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection