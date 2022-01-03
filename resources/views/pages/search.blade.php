@extends('layouts.app')

@section('content')
<div class="home-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <p>Search</p>
            </div>
            <div class="col-3">
                <select id="inputState" class="form-select">
                    <option selected>Animal</option>
                    <option>Kambing</option>
                    <option>Sapi</option>
                    <option>Domba</option>
                </select>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Last name">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary">
                    Search
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                        </div>
                    </div>
                </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                        </div>
                    </div>
                </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('detail') }}" class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection