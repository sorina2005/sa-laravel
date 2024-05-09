@php use Illuminate\Support\Facades\Auth; @endphp
@include('shared.header')

@php
    $userId = Auth::id();
@endphp

<div class="container py-5">
    <h1 class="text-center mb-4">Comment Section</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="comments">
                @foreach($comments as $comment)
                    <div class="comment card mb-4">
                        <div class="card-body">
                            {{-- Retrieve the name of the user for this comment --}}
                            @php
                                $user = App\Models\User::find($comment->user_id);
                                $userName = $user ? $user->name : 'Unknown User';
                                $email = $user ? $user->email : 'No email';
                            @endphp

                            @php
                                $recipe = App\Models\Recipe::find($comment->recipe_id);
                                $recipeName = $recipe ? $recipe->title : 'Unknown Recipe';
                            @endphp

                            <div class="user mb-2"><strong>{{ $userName }}</strong> ({{ $email }}) commented
                                on <strong>{{ $recipeName }}</strong></div>
                            <div class="content">{{ $comment->content }}</div>

                            @if($user->id === $userId)
                                <form action="{{ route('delete-comment', $recipe->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mt-2" title="Delete comment">
                                        Delete Comment
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
