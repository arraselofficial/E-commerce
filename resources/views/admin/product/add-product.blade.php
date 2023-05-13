@extends('admin.master')
@section('title')
Add-Product
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h2 class="text-center font-weight-bold my-4">Add-Product</h2></div>
                    <div class="card-body">
                        <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="product_name"  id="inputFirstName" type="text" placeholder="Enter your Product name" />
                                        <label for="inputFirstName">Product Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="category_name" id="inputPassword" type="text" placeholder="Category Name" />
                                        <label for="inputPassword">Category</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="brand_name" id="inputPasswordConfirm" type="text" placeholder="Brand Name" />
                                        <label for="inputPasswordConfirm">Brand</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="price"  id="inputFirstName" type="text" placeholder="Enter your Product price" />
                                        <label for="inputFirstName">price</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea class="form-control" name="description"  id="" type="text" placeholder="Enter your Product Description" cols="30" rows="10"></textarea>
                                        <label for="inputFirstName">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="image" id="inputEmail" type="file" placeholder="image" />
                                <label for="inputEmail">Image</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="btn btn-primary btn-block"  value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
