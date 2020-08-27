@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title">
                @error('text')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <div class="col-8">
            <input type="text" class="form-control @error('caption') is-invalid @enderror" id="caption" placeholder="Caption">
            @error('text')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
             @enderror
        </div>

        </div>
        <div class="form-row">
            <div class="col-8">
                <div class="form-group">
                    <label for="body">Body</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" rows="3"></textarea>
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="image"></label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Photo</small>
                    @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
        </div>
        <div>
            <button class="btn btn-info mr-auto" type="submit">Update Post</button>
        </div>
        
    </form>
</div>
@endsection