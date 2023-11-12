@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('message')
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit User</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('user.update', $user->id)}}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                       value="{{ old('name', $user->name) }}" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">User Name</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                       value="{{ old('username', $user->username) }}" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                       value="{{ old('email', $user->email) }}" placeholder="Email">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                       value="{{ old('password', $user->password) }}" placeholder="Password">
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <label for="file">Image</label>
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                <img id="img-preview"
                                    src="{{ asset($user->image) }}"
                                    width="250px" />
                            </div>
                        </div>
                        <div class="pb-5 pt-3">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@push('admin-js')
    <script>
        let noimage = "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
@endpush
