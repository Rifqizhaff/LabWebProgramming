@extends('layouts.app')

@section('content')
<div class="home-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <p>Search</p>
            </div>
            <div class="col-3">
                <select id="inputState" class="form-select">
                    <option selected>Animal</option>
                    <option>Kambing</option>
                    <option>Sapi</option>
                    <option>Domba</option>
                </select>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Last name">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary">
                    Search
                </button>
            </div>
        </div>
        <div class="row">
            @forelse ($items as $item)
                
                <div class="col-4">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>

                            @if(Auth::user() && Auth::user()->roles == 'ADMIN')
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-danger mb-3">Update Product</a>
                            @endif

                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-primary">Product Detail</a>
                        </div>
                    </div>
                </div>
            
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Data kosong
                    </td>
                </tr>
            @endforelse
        </div>
    </div>
</div>
@endsection