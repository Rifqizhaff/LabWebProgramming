@extends('layouts.app')

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
                
                @forelse ($items as $item)
                    <tbody> 
                        <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>{{ $item->transaction_date }}</td>
                        <td><a href=""><button type="button" class="btn btn-info">Check Detail</button></a></td>
                        </tr>
                    </tbody>

                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data kosong
                        </td>
                    </tr>

                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection