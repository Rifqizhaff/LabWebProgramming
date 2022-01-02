@extends('layouts.app')

@section('content')
<div class="register-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputGender" class="col-sm-2 form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select id="inputGender" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                    Remember Me
                                    </label>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection