@extends('layouts.app')

@section('content')
<div class="detail-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-4">
                <div class="container-fluid">
                    <img src="{{ Storage::url($items->image) }}" alt="gambar 1" style="height: 250px; width:350px;">
                </div>
            </div>
            <div class="col-8">
                <div class="container-fluid">
                    <div class="row">
                        <h3>
                            {{ $items->name }}
                        </h3>
                    </div>
                    <div class="row">
                        <h5>
                            Deskripsi :
                        </h5>
                        <p>{{ $items->description }}</p>
                    </div>
                    <div class="row">
                        <h5>
                            Stock :
                        </h5>
                        <p>{{ $items->stock }} Piece(s)</p>
                    </div>
                    <div class="row">
                        <h5>
                            Price :
                        </h5>
                        <p>Rp {{ $items->price }}</p>
                    </div>

                    @if(Auth::user() && Auth::user()->roles == 'USER')
                    <form action="{{ route('cart_store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h5>
                                Add to Cart :
                            </h5>
                            <div class="col-auto">
                                <label for="quantity" class="col-form-label">Quantity :</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="quantity" name="quantity" class="form-control" value="{{ old('quantity') }}">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> 
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection