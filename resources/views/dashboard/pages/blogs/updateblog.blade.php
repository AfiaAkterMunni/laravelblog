@extends('dashboard.layouts.master')
@section('title', 'Update Blog')
@section('content')

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Update Your Blog Here...</h1>
                </div>
            </div>
        </div>
    </header><!-- ./HEADER -->

     <!-- POSTS -->
     <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Blog</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="Post One">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control">
                                        <option value="">Web Development</option>
                                        <option value="">Tech Gadgets</option>
                                        <option value="">Business</option>
                                        <option value="">Health &amp; Wellness</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="file">Image Upload</label>
                                    <input type="file" class="form-control-file">
                                    <small class="form-text text-muted">Max Size 3mb</small>
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="editor1" class="form-control">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aut repellat qui dolores asperiores possimus, ipsum laborum illum natus voluptates dignissimos sapiente, voluptatem repudiandae ab unde? Ad esse quidem omnis.
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./POSTS -->

     <!-- ACTIONS -->
     <section id="actions" class="py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fas fa-check"></i> Save
                    </a>
                </div>
            </div>
        </div>
    </section><!-- ./ACTIONS -->

@endsection
