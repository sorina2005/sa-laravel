
@include('shared.header')

<div class="container h-100 mt-5" style="padding:5rem 0 3rem 0">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" rows="3"></textarea>
                </div>
                @error('ingredients')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="instructions">Instructions</label>
                    <textarea class="form-control @error('instructions') is-invalid @enderror" id="instructions" name="instructions" rows="5"></textarea>
                </div>
                @error('instructions')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                </div>
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn mt-3 btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>

@include('shared.footer')

