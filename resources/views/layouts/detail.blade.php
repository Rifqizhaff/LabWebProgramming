@extends('layouts.master')

@section('content')
<div class="detail-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <img src="..." alt="gambar 1">
            </div>
            <div class="col-8">
                <div class="container-fluid">
                    <div class="row">
                        <h3>
                            Kambing Cilik
                        </h3>
                    </div>
                    <div class="row">
                        <h5>
                            Deskripsi :
                        </h5>
                        <p>Kambing berkualitas yang berumur 2-3 tahun!</p>
                    </div>
                    <div class="row">
                        <h5>
                            Stock :
                        </h5>
                        <p>N Piece(s)</p>
                    </div>
                    <div class="row">
                        <h5>
                            Price :
                        </h5>
                        <p>Rp 35000000</p>
                    </div>
                    <div class="row">
                        <h5>
                            Add to Cart :
                        </h5>
                        <div class="col-auto">
                            <label for="inputQuantity6" class="col-form-label">Quantity :</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="inputPassword6" class="form-control">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection