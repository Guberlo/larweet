
<div class="border border-gray-300 rounded-2xl p-6">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet KEKW YOU SO ALONE.</p>
    @endforelse

    {{ $tweets->links() }}
</div>

