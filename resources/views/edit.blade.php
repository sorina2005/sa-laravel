@include('shared.header')

<div class="container h-100 mt-5" style="padding:5rem 0 3rem 0">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('update', [$post->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                           value="{{ $post->title }}">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" rows="3"
                              required>{{ $post->ingredients }}</textarea>
                    @error('ingredients')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="instructions">Instructions</label>
                    <textarea class="form-control @error('instructions') is-invalid @enderror" id="instructions" name="instructions" rows="5"
                              required>{{ $post->instructions }}</textarea>
                </div>
                @error('instructions')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="recipeImage">Current Image</label>
                    @if($post->image)
                        <img src="{{ asset($post->image) }}" alt="Recipe Image" style="max-width: 100%; height: auto;">
                    @else
                        <p>No image uploaded</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="newRecipeImage">New Image</label>
                    <input type="file" class="form-control-file" id="newRecipeImage" name="newRecipeImage">
                    <!-- Hidden input to store the current image path -->
                    <input type="hidden" name="recipeImage" value="{{ $post->image }}">
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>

@include('shared.footer')
