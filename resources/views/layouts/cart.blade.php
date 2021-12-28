@extends('layouts.master')

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
                    <tr>
                    <th scope="row">1</th>
                    <td>Kambing cilik</td>
                    <td>3500000</td>
                    <td>5</td>
                    <td>12500000</td>
                    <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Ayam kokok</td>
                    <td>100000</td>
                    <td>10</td>
                    <td>12500000</td>
                    <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Sapi gemoy</td>
                    <td>123123</td>
                    <td>123</td>
                    <td>12500000</td>
                    <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
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