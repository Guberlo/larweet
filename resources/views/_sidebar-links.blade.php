<ul>
    <li><a 
        href="/tweets" class="font-bold text-lg mb-4 block">
        Home</a></li>
    <li><a 
        href="/explore" class="font-bold text-lg mb-4 block">
        Explore</a></li>
    <li><a 
        href="/users/{{ auth()->user()->username }}" class="font-bold text-lg mb-4 block">
        Profile</a></li>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button
                href="/" class="font-bold text-lg mb-4 block">
                Logout
            </button>
        </form>
    </li>
</ul>