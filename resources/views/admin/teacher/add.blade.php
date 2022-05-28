@extends('master.admin.master')
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Add Teacher From</h4>

                            <p class="text-center text-success">{{Session::get('message')}}</p>

                            <form action="{{route('new-teacher')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-fullname-input" class="col-sm-3 col-form-label">Full name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="mobile"  class="form-control" id="horizontal-email-input">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="address" id="horizontal-password-input"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file"  name="image"  class="form-control-file" accept="image/*"/>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Create New Teacher</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

