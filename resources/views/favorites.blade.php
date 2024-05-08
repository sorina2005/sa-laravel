@include('shared.header')
<div class="container" style="padding-top:5rem;">
    <section id="category">
        <!-- Category Area -->
        <div class="row">
            @if(count($recipes)>0)
                @foreach ($recipes as $recipe)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $recipe->image }}" class="card-img-top" alt="Recipe Image">
                            <div class="card-body">
                                <h5 class="card-title text-center"><strong>{{ $recipe->title }}</strong></h5>
                                <div class="text-center">
                                    {{--                                to do make view here--}}
                                    <form action="{{ route('show', $recipe->id) }}">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-dark" title="View">View Recipe</button>
                                    </form>
                                    <br>
                                    <form action="{{ route('delete-favorite', $recipe->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete from favorites"><i
                                                class="fa-solid fa-trash p-1"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="alert alert-danger">No posts found</p>
            @endif
            {{--todo make the liked button a different color if the post is liked, or maybe dissaper if the user liked it--}}
        </div>
    </section>
</div>

@include('shared.footer')
