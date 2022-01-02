@extends('layouts.app')

@section('content')
<div class="cart-section">
    <div class="container-fluid">
        <div class="row">
            <h2>
                Manage User
            </h2>
            <table class="table">
                <thead class = "table-light">
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                    <th scope="row">1</th>
                    <td>Kambing cilik</td>
                    <td><a href=""><button type="button" class="btn btn-primary">Delete</button></a></td>
                    </tr>
                    <tr class="table-secondary">
                    <th scope="row">2</th>
                    <td>Ayam kokok</td>
                    <td><a href=""><button type="button" class="btn btn-primary">Delete</button></a></td>
                    </tr>
                    <tr class="table-secondary">
                    <th scope="row">3</th>
                    <td>Sapi gemoy</td>
                    <td><a href=""><button type="button" class="btn btn-primary">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection