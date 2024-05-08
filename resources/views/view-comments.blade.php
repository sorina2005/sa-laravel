@include('shared.header')
<div class="container" style="padding-top: 5rem;">
    <h1>Comment section</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="comments mt-4">
                @foreach($comments as $comment)
                    <div class="comment mb-4">
                        {{-- Retrieve the name of the user for this comment --}}
                        @php
                            $user = App\Models\User::find($comment->user_id);
                            $user_name = $user ? $user->name : 'Unknown User';
                            $email = $user ? $user->email : 'No email';
                        @endphp

                        {{-- Retrieve the name of the recipe for this comment --}}
                        @php
                            $recipe = App\Models\Recipe::find($comment->recipe_id);
                            $recipe_name = $recipe ? $recipe->title : 'Unknown Recipe';
                        @endphp

                        {{-- Display the user's name, the name of the recipe, and the comment content --}}
                        <div class="user"><strong>{{ $user_name }}</strong>({{ $email }}) commented on {{ $recipe_name }}</div>
                        <div class="content text_center">{{ $comment->content }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


