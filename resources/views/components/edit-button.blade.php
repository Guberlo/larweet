@unless (auth()->user()->isNot($user))
    <a href="" class="bg-gray-100 rounded-full border border-gray-300 py-2 px-4 text-black-200 text-sm mr-2">Edit Profile</a>
@endunless