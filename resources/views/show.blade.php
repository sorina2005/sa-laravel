@include('shared.header')


<div class="container" style="padding-top: 5rem;">
    <ul id="recipe-list" class="recipe-list">
        <img src="{{ $post->image }}" class="card-img-top" alt="Recipe Image">
    </ul>
    <div class="card-body">
        <h5 class="card-title text-center"><strong>{{ $post->title }}</strong></h5>
        <div class="text-center">
            <p>
                <strong>INGREDIENTS: </strong>
                {{ $post->ingredients }}
            </p>
            <p>
                <strong>Instructions: </strong>
                {{ $post->instructions }}
            </p>
        </div>
    </div>
</div>

@include('shared.footer')
