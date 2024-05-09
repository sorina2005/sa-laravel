<!-- Header -->
@include('shared.header')

<section class="sec1 text-center">
    <h1>@lang('app.mainPageStatement')</h1>
</section>

<section class="sec2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur at, libero quaerat
        distinctio suscipit odit modi esse vero temporibus cum similique recusandae neque, ut molestias porro autem?
        Veritatis excepturi sequi harum ratione eius! Inventore, magnam. Molestias itaque dignissimos est dicta vel
        fugit eaque esse iste voluptatibus minima soluta, ex ab qui accusantium ipsam quidem explicabo debitis
        doloribus. Architecto sit nihil dolorum error recusandae aspernatur? Dolorem voluptate rerum nihil, quaerat
        consequatur a voluptatum, velit consequuntur nam nisi eos laborum voluptates maiores corporis accusamus
        obcaecati ipsa, beatae iure eligendi! Provident quaerat odit vel a, quibusdam recusandae repudiandae eum
        necessitatibus consequatur obcaecati sit.</p></section>
<section class="sec3"></section>
<section class="sec2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quam libero corporis
        voluptatem dolores accusantium voluptates dicta pariatur ipsa earum! Voluptatum amet ducimus nulla tenetur eum
        sequi obcaecati placeat at molestias. Harum, voluptates? Optio minus perspiciatis a quam, doloribus incidunt
        necessitatibus autem molestiae provident eligendi tempore veritatis, fuga distinctio? Commodi et, at rem nihil,
        ut perferendis hic optio cumque veritatis nisi odit nobis eligendi debitis esse corrupti vitae. Nam ipsam autem
        magnam cupiditate ab enim voluptate veniam corrupti! Beatae quidem nisi quisquam maiores voluptas soluta eos
        ipsum alias placeat animi nihil, sunt voluptate assumenda earum quia quam recusandae nobis officia.</p>
</section>
<section class="sec4"></section>
<br>
<br>
<br>
<div class="container">
    <section id="category" style="padding-bottom: 150rem; padding-top: 6rem; ">
        <!-- Category Area -->
        <div class="row">
            @if(count($recipes)>0)
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @foreach ($recipes as $recipe)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $recipe->image }}" class="card-img-top" alt="Recipe Image">
                            <div class="card-body">
                                <h5 class="card-title text-center"><strong>{{ $recipe->title }}</strong></h5>
                                <div class="text-center">
                                    <form action="{{ route('show', $recipe->id) }}">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-dark" title="View">@lang('app.viewRecipe')</button>
                                    </form>
                                    <br>
                                    @auth()
                                        <div class="row">
                                            <div class="col">
                                                <form action="{{ route('add-comment', $recipe->id) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-dark" title="Post a comment">
                                                        @lang('app.postComment')
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="{{ route('show-comments', $recipe->id) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-dark" title="View comments">
                                                        @lang('app.viewComments')
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="alert alert-danger">@lang('app.noPostsFound')</p>
            @endif
        </div>
    </section>
</div>
<div class="search-recipe text-center">
    <a href="../html/api_index.html" target="_blank">@lang('app.searchMore')</a>
</div>
<br>
<br>
<div class="container">
    <section id="slider">
        <div>
            <br>
            <h2>@lang('app.picturesFromYou')</h2>
        </div>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="{{ asset('images/photos from you/1.JPG') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/2.JPG')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/3.jpeg')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/4.jpeg')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/5.jpeg')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/6.jpeg')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('images/photos from you/7.JPG')}}">
                </div>
            </div>
            <div class="buttons">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>
</div>
<!-- FOOTER -->
@include('shared.footer')
