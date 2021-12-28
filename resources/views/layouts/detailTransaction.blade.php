@extends('layouts.master')

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
                    <tr>
                    <th scope="row">1</th>
                    <td>Kambing cilik</td>
                    <td>Sehat dan kuat loh kak, suka makan rumput</td>
                    <td>3500000</td>
                    <td>5</td>
                    <td>12500000</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Ayam kokok</td>
                    <td>Sehat dan kuat loh kak, suka makan rumput</td>
                    <td>100000</td>
                    <td>10</td>
                    <td>12500000</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Sapi gemoy</td>
                    <td>Sehat dan kuat loh kak, suka makan rumput</td>
                    <td>123123</td>
                    <td>123</td>
                    <td>12500000</td>
                    </tr>
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