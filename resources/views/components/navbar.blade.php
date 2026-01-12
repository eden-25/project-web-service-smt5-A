<nav class="bg-primary shadow-md sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between">
            <ul class="hidden md:flex space-x-1">
                @foreach (['Beranda','News','Kriminal','Politik','Olahraga','Budaya','Wisata','Ekonomi','Pendidikan'] as $m)
                <li>
                    <a href="#" class="nav-item block px-4 py-3 text-white font-medium rounded-button whitespace-nowrap">
                        {{ $m }}
                    </a>
                </li>
                @endforeach
            </ul>
            <button class="md:hidden text-white p-2" id="mobile-menu-btn">
                <i class="ri-menu-line"></i>
            </button>
        </div>
    </div>

    <div class="md:hidden hidden bg-primary border-t border-blue-800" id="mobile-menu">
        @foreach (['Beranda','News','Kriminal','Politik','Olahraga','Budaya','Wisata','Ekonomi','Pendidikan'] as $m)
            <a href="#" class="block px-4 py-3 text-white border-b border-blue-800">{{ $m }}</a>
        @endforeach
    </div>
</nav>
