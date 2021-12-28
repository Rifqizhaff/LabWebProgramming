@extends('layouts.master')

@section('content')
<div class="cart-section">
    <div class="container-fluid">
        <div class="row">
            <h2>
                Transaction
            </h2>
            <table class="table">
                <thead class = "table-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Transaction Time</th>
                    <th scope="col">Detail Transaction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Kambing cilik</td>
                    <td><a href=""><button type="button" class="btn btn-info">Check Detail</button></a></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Ayam kokok</td>
                    <td><a href=""><button type="button" class="btn btn-info">Check Detail</button></a></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Sapi gemoy</td>
                    <td><a href=""><button type="button" class="btn btn-info">Check Detail</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection