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
                    @forelse ($items as $item)
                        <tr class="table-secondary">
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <form action="{{ route('delete_user', $item) }}" method="post">
                                @csrf
                                @method('delete')
                                <td>
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>

                                </td>
                            </form>
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
    </div>
</div>
@endsection