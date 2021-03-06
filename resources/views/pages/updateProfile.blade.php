@extends('layouts.app')

@section('content')
<div class="updateprofile-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                        Update Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select id="gender" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection