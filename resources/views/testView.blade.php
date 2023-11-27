<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 8 IMAGE CRUD
                        <a href="{{ route('start') }}" class="btn btn-primary float-end">Add Student</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->categoryid }}</td>
                                <td>
                                    <img src="{{ asset('uploads/products/'.$item->product_image) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{ route('edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
{{--                                     <a href="{{ route('delete-product/',$item->id) }}" class="btn btn-danger btn-sm">Delete</a>--}}
                                    <form action="{{ route('delete-product',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

