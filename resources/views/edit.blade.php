<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Student with IMAGE
                        <a href="{{ route('products') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('update-product',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
{{--                        @method('PUT')--}}

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Price</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Category Type</label>
                            <input type="number" name="categoryid" value="{{$product->categoryid}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Image</label>
                            <input type="file" name="product_image" class="form-control">
                            <img src="{{ asset('uploads/products/'.$product->product_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
