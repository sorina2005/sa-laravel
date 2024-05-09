@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
    $user = User::find(Auth::id());
@endphp

@include('shared.header')
<br>
<br>
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/no-pic.png') }}" alt="avatar"
                                 class="rounded-circle bg-dark img-fluid" style="width: 150px;">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text text-muted">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <form action="{{ route('update-profile', auth()->id()) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-dark">@lang('app.editProfileInfo')</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@include('shared.footer')
