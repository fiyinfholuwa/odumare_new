@extends('admin.app')

@section('content')

    <div class="row" style="margin:10px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Post</div>
                </div>
                <div class="card-body">
                    <form action="{{route('blog.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="email2">Blog Title</label>
                        <input type="text" class="form-control" id="email2" value="{{$post->name}}" required name="name" placeholder="Enter Blog Title">
                        <small style="color:red; font-weight:500">
                        @error('name')
                        {{$message}}
                        @enderror
                        </small>
                        
                    </div>
                    <div class="form-group">
                        <label for="email2">Post Short Description</label>
                        <textarea type="text" class="form-control" id="email2" required name="desc" placeholder="Enter Post Short Description">{{$post->name}}</textarea>
                        <small style="color:red; font-weight:500">
                        @error('content')
                        {{$message}}
                        @enderror
                        </small>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="email2">Post Link</label>
                        <input type="text" class="form-control" id="email2" required value="{{$post->link}}" name="link" placeholder="Enter Post Link">
                        <small style="color:red; font-weight:500">
                        
                        </small>
                        
                    </div>

                    <div class="form-group">
                        <label for="email2">Post Image</label>
                        <input type="file" class="form-control" id="email2" accept="image/*"  name="image" >
                        <small style="color:red; font-weight:500">
                        <img height="60" width="60" src="{{asset($post->image)}}" />
                    
                        </small>
                        
                    </div>
                
                </div>
                <div class="card-action">
                    <button class="btn btn-primary">Update Post</button>
        
                </div>
                    </form>
            </div>
            
        </div>
        
    </div>

@endsection