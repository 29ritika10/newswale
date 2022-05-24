@extends('base')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action=""method="post">
                       <div class="mb-3">
                        <label class="">title</label>
                        <input type="text"name="title"class="form-control"value="{{ old('title') }}">
                        @error('title')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label class="">author</label>
                        <input type="text"name="author"class="form-control"value="{{ old('author') }}">
                        @error('author')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                       <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control"enctype="multipart/data">
                        @error('image')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                   
                       <div class="mb-3">
                        <label class="">description</label>
                        <textarea type="text"name="description"class="form-control"value="{{ old('description') }}"></textarea>
                        @error('description')
                        <p class="small text-dark">{{ $message }}</p>
                    @enderror
                       </div>
                      
                      
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection