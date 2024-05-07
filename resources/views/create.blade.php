
@include('shared.header')

<div class="container h-100 mt-5" style="padding:5rem 0 3rem 0">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Image</label>
                    <input type="file" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">Ingredients</label>
                    <textarea class="form-control" id="body" name="body" rows="3"  required ></textarea>
                </div>
                <div class="form-group">
                    <label for="body">Instructions</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>

@include('shared.footer')

