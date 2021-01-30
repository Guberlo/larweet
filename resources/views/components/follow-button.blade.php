<form action="/users/follow/{{ $user->name }}" method="post">
    @csrf
    <button type="submit" href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">
        {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>