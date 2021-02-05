<x-app>
    <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
        @foreach ($users as $user)
            <a href="/users/{{ $user->username }}" class="flex items-center mb-5">
                <img src="{{ $user->getAvatar(60) }}" alt="{{ $user->username }}'s avatar" class="mr-4 rounded-full">

                <div>
                    <h4 class="font-bold">{{ $user->username }}</h4>
                </div>

            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>