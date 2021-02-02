@unless (auth()->user()->is($user))
<form action="/users/follow/{{ $user->username }}" method="post">
    @csrf
    <button type="submit" href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">
        {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
@endunless
