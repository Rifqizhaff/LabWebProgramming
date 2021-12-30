@extends('layouts.master')

@section('content')
<div class="insertproduct-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                        Insert Product
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputGender" class="col-sm-2 form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="inputGender" class="form-select">
                                        <option selected>Animal...</option>
                                        <option>Sapi</option>
                                        <option>Kambing</option>
                                        <option>Domba</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTitle3" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTitle3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDesc3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputDesc3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPrice3" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPrice3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputStock3" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputStock3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <form action="/action_page.php">
                                        <input type="file" id="img" name="img" accept="image/*">
                                        
                                    </form>
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