@extends('layouts.app')

@section('content')
<div class="cart-section">
    <div class="container-fluid">
        <div class="row">
            <h2>
                Cart
            </h2>
            <table class="table">
                <thead class = "table-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->subtotal }}</td>
                        <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data kosong
                            </td>
                        </tr>

                    @endforelse
                    
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col align-self-end"> 
                <p>
                    Grand Total : Rp.99999999,-
                </p>
                <a href="#">
                    <button type="button" class="btn btn-info">
                        Checkout
                    </button>
                </a>
            </div>
            
        </div>
    </div>
</div>
@endsection