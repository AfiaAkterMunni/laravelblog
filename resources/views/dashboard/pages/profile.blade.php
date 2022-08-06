@extends('dashboard.layouts.master')
@section('title', 'Profile | abc')
@section('content')


    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-user-circle"></i> Edit Profile</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->



    <!-- PROFILE EDIT -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Success!</strong> This alert box could indicate a successful or positive action.
                              </div>
                            @if (session('success'))
                            <div class="alert-box--success" id="successBox">
                                {{session('success')}}
                            </div>
                            @endif
                            <form action="{{route('profile.update')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name') ?? $user->username}}">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email') ?? $user->email}}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                <div class="form-group">
                                    <label for="des">Designation</label>
                                    <input type="text" name="des" id="des" class="form-control" value="{{old('des') ?? $user->designation}}">
                                    @error('des')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button href="#" class="btn btn-success btn-block" type="submit">
                                    <i class="fas fa-check pr-2"></i> Save
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Your Image</h3>
                    @if ($user->image)
                        <img src="{{asset('uploads/users/'.$user->image)}}" alt="avatar" class="d-block img-fluid mb-3">
                    @else
                        <img src="{{asset('images/avatar.png')}}" alt="avatar" class="d-block img-fluid mb-3">
                    @endif
                    <h5>{{$user->username}}</h5>
                    <p>{{$user->designation}}</p>
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
                        <i class="fas fa-lock pr-2"></i> Change Password</a>
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->



    <!-- PASSWORD MODAL -->
    <div class="modal fade" id="passwordModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Change Password</h5>
                    <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="password">Older Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm New Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-dismiss="modal">Update Password</button>
                </div>
            </div>
        </div>
    </div><!-- ./PASSWORD MODAL -->
@endsection


