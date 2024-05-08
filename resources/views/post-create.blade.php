@include('shared.header')

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Comment</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('comment') }}">
                            @csrf
                            <div class="form-group">
                                <label class="label" for="content">Comment: </label>
                                <input id="content" name="content" class="form-control" required></input>
                            </div>
                            <input type="hidden" name="recipe_id" value="{{ $recipe }}">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
