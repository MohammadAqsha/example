<x-layout>
    @php
        $kategoriAktif = request()->get('kategori', 'semua');
    @endphp

    <section class="bg-[#f8f9fa] py-20">
        <div class="max-w-7xl mx-auto px-14 text-center">
            <h2 class="text-2xl font-bold text-[#0A3D62] mb-4">Galeri Produk</h2>
            <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
                Berikut adalah beberapa contoh hasil produk custom dari kendaraan dari Makkasar Sticker<br>
                Tersedia berbagai pilihan design dan model yang bisa disesuaikan dengan keinginan anda.
            </p>

            <!-- Tombol Filter -->
            <div class="flex justify-center gap-4 mb-10 flex-wrap">
                <a href="{{ url('/galeri?kategori=semua') }}"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200
                    {{ $kategoriAktif == 'semua' ? 'bg-[#0A3D62] text-white' : 'bg-white text-[#0A3D62] border hover:bg-[#FDCB58]' }}">
                    Semua
                </a>
                <a href="{{ url('/galeri?kategori=mobil') }}"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200
                    {{ $kategoriAktif == 'mobil' ? 'bg-[#0A3D62] text-white' : 'bg-white text-[#0A3D62] border hover:bg-[#FDCB58]' }}">
                    Plat Mobil
                </a>
                <a href="{{ url('/galeri?kategori=motor') }}"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200
                    {{ $kategoriAktif == 'motor' ? 'bg-[#0A3D62] text-white' : 'bg-white text-[#0A3D62] border hover:bg-[#FDCB58]' }}">
                    Plat Motor
                </a>
                <a href="{{ url('/galeri?kategori=premium') }}"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200
                    {{ $kategoriAktif == 'premium' ? 'bg-[#0A3D62] text-white' : 'bg-white text-[#0A3D62] border hover:bg-[#FDCB58]' }}">
                    Premium
                </a>
            </div>

            <!-- Daftar Produk -->
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($products as $product)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}"
                            class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-4 text-left">
                            <h3 class="text-[#0A3D62] font-bold text-lg mb-1">{{ $product->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $products->appends(request()->query())->links() }}
            </div>






        </div>
    </section>
</x-layout>
