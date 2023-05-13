@extends('admin.master')
@section('title')
    Add-Product
@endsection

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>price</th>
                        <th>image</th>
                        <th>description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->brand_name}}</td>
                        <td>{{$product->price}}</td>
                        <td><img style="width: 50px;height: 50px" src="{{asset($product->image)}}" alt=""></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->status==1?'published':'unpublished'}}</td>
                        <td>
                            @if($product->status==1)
                                <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-warning form-control mt-2">Unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-primary form-control mt-2">Published</a>
                            @endif
                                <a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-primary form-control mt-2">Edit</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('delete').submit()">
                                    <form action="{{route('delete')}}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="product_id">
                                        <input type="submit" value="Delete" class="btn btn-danger form-control mt-2">
                                    </form>
                                </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
