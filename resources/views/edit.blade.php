
@include('shared.header')

<div class="container h-100 mt-5" style="padding:5rem 0 3rem 0">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                           value="{{ $post->title }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Ingredients</label>
                    <textarea class="form-control" id="body" name="body" rows="3"  required >{{ $post->ingredients }}</textarea>
                </div>
                <div class="form-group">
                    <label for="body">Instructions</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $post->instructions }}</textarea>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>

@include('shared.footer')
