@php use Illuminate\Support\Facades\Auth; @endphp
@include('shared.header')

<section id="food">
    <div class="card card-food-list">
        <h1 class="text-center" style="padding-top:6rem;"><strong>Food Lists</strong></h1>
        <div class="mt-4">
            <div class="row">


                <div class="col-md-2 mr-auto">
                    <form action="{{ route('recipes-create') }}">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-add-food btn-secondary">Add Recipe</button>
                    </form>
                </div>


                <div class="col-md-2">
                    <input class="form-control p-4" type="text" id="searchInput" placeholder="Search...">
                </div>
            </div>
        </div>

        <table id="foodListTable" class="table table-responsive mt-4" style="text-align:center;">
            <thead>
            <tr>
                <th scope="col" style="width: 5%;">Food ID</th>
                <th scope="col" style="width: 10%;">Recipe Image</th>
                <th scope="col" style="width: 10%;">Recipe Name</th>
                <th scope="col" style="width: 10%;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($recipes as $recipe)
                <tr>
                    <th>{{ $recipe->id }}</th>
                    <td><img src="{{ asset($recipe->image) }}" class="img-fluid" style="height: 50px; width: 90px"
                             alt="Recipe Image"></td>
                    <td>{{ $recipe->title }}</td>
                    {{--                    <td>{{ $recipe->category->category_name }}</td>--}}
                    <td>
                        <form action="{{ route('show', $recipe->id) }}">
                            @csrf
                            @method('GET')
                            <button type="submit" title="View"><i class="fa-solid fa-list p-1"></i></button>
                        </form>
                        <form action="{{ route('edit', $recipe->id) }}" method="post">
                            @csrf
                            @method('GET')
                            <button type="submit" title="Edit"><i class="fa-solid fa-pencil p-1"></i></button>
                        </form>

                        <form action="{{ route('destroy', $recipe->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete"><i class="fa-solid fa-trash p-1"></i></button>
                        </form>
                        @php
                            $userId = Auth::id();

                            $isFavorite = App\Models\Favorite::where('recipe_id', $recipe->id)
                            ->where('user_id', $userId)
                            ->exists();

                        @endphp
                        @if ($isFavorite)
                            <i class="fa-solid fa-heart text-danger" title="Favorite"></i>
                        @else
                            <form action="{{ route('create-favorite') }}" method="post">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                <button type="submit" title="Like"><i class="fa-solid fa-heart p-1"></i></button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>


<br>
<br>

@include('shared.footer')
