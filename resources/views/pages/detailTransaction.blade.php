@extends('layouts.app')

@section('content')
<div class="cart-section">
    <div class="container-fluid">
        <div class="row">
            <h2>
                Detail Transaction
            </h2>
            <table class="table">
                <thead class = "table-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Detail</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($item as $item)   
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>12500000</td>
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
            </div>
            
        </div>
    </div>
</div>
@endsection