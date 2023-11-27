

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <h4>Student Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Category ID</label>
                                <input type="number" name="categoryid" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Upload Image</label>
                                <input type="file" name="product_image" required class="course form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

