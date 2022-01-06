@extends('layouts.app')

@section('content')
<div class="home-section">
    <div class="container-fluid">
        
        <div class="row">
            
            @forelse ($items as $item)
                
                <div class="col-4">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>

                            @if(Auth::user() && Auth::user()->roles == 'ADMIN')
                                <a href="{{ route('updateproduct') }}" class="btn btn-danger mb-3">Update Product</a>
                            @endif

                            <a href="{{ route('show_product', $items->id) }}" class="btn btn-primary">Product Detail</a>
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