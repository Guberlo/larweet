<x-app>

<div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
    <header class="mb-6" style="position: relative">
        <div class="relative">
            <img 
            src="/images/banner.png" 
            alt="user-banner"
            class="mb-4"
            style="border-radius: 20px"
            >

            <img src="{{ $user->getAvatar(150) }}" 
            alt="avatar"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%"
            width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Signed up {{$user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <x-edit-button :user="$user"></x-edit-button>

                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>

        <p class="text-sm">
            I am a student who won't ever graduate since I'm quite stupid KEK
        </p>

    </header>

    @include('_timeline', ['tweets' => $user->tweets])

</div>

</x-app>
