@extends('layouts.app')

@section('content')
<div class="bg-[#fdf9f9] min-h-screen">

    {{-- ================= TOP BAR ================= --}}
    <div class="max-w-6xl mx-auto px-4 pt-8 flex justify-between items-center">
        <h1 class="text-3xl font-extrabold text-[#6b1d1d]">
            Keranjang Belanja
        </h1>

        <div class="flex items-center gap-4 text-sm">
            <a href="{{ route('cart.index') }}" class="font-semibold text-[#6b1d1d]">
                🛒 Keranjang
            </a>

            @guest
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-[#6b1d1d]">
                    Masuk
                </a>
                <a href="{{ route('register') }}"
                   class="bg-[#6b1d1d] text-white px-4 py-2 rounded-lg hover:bg-[#541616] transition">
                    Daftar
                </a>
            @else
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-[#6b1d1d]">
                    Dashboard
                </a>
            @endguest
        </div>
    </div>

    {{-- ================= MAIN ================= --}}
    <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- ================= LIST ITEM ================= --}}
        <div class="lg:col-span-2 space-y-5">
            @forelse ($cart as $item)
                <div class="bg-white border rounded-2xl p-5 flex gap-4 items-center shadow-sm hover:shadow transition">

                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-lg">
                            {{ $item['product_name'] }}
                        </h3>
                        <p class="text-[#6b1d1d] font-semibold mt-1">
                            Rp {{ number_format($item['price']) }}
                        </p>
                    </div>

                    {{-- QTY --}}
                    <div class="flex items-center bg-gray-50 rounded-xl p-1 border">
                        <form action="{{ route('cart.update') }}" method="POST" class="flex items-center">
                            @csrf
                            <input type="hidden" name="variant_id" value="{{ $item['variant_id'] }}">

                            <button name="qty" value="{{ max(1, $item['qty'] - 1) }}"
                                class="w-9 h-9 rounded-lg flex items-center justify-center hover:bg-[#6b1d1d] hover:text-white transition">
                                −
                            </button>

                            <span class="w-10 text-center font-bold text-sm">
                                {{ $item['qty'] }}
                            </span>

                            <button name="qty" value="{{ $item['qty'] + 1 }}"
                                class="w-9 h-9 rounded-lg flex items-center justify-center hover:bg-[#6b1d1d] hover:text-white transition">
                                +
                            </button>
                        </form>
                    </div>

                    {{-- TOTAL --}}
                    <div class="text-right min-w-[120px]">
                        <p class="font-bold text-gray-900">
                            Rp {{ number_format($item['price'] * $item['qty']) }}
                        </p>
                        <form action="{{ route('cart.remove', $item['variant_id']) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="text-xs text-red-500 hover:underline mt-1">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-white p-14 text-center rounded-2xl border border-dashed border-gray-300">
                    <p class="text-gray-500 text-lg">
                        Keranjang kamu masih kosong.
                    </p>
                    <a href="{{ route('home') }}"
                       class="inline-block mt-4 font-bold text-[#6b1d1d] hover:underline">
                        Mulai Belanja →
                    </a>
                </div>
            @endforelse
        </div>

        {{-- ================= SUMMARY ================= --}}
        <div>
            <div class="bg-white border rounded-2xl p-6 shadow-sm sticky top-8">
                <h2 class="font-bold text-xl text-[#6b1d1d] mb-6 border-b pb-4">
                    Ringkasan Pesanan
                </h2>

                {{-- ALAMAT --}}
                <div class="mb-6">
                    <label class="block text-xs font-bold text-gray-600 mb-2 uppercase tracking-wider">
                        Alamat Pengiriman
                    </label>

                    <select id="addressSelector"
                        class="w-full border-gray-300 rounded-xl shadow-sm p-3 bg-gray-50 text-sm focus:ring-[#6b1d1d] focus:border-[#6b1d1d]">
                        <option value="">-- Pilih Alamat --</option>
                        @foreach($addresses as $addr)
                            <option value="{{ $addr->id }}">
                                {{ $addr->name }} ({{ $addr->city }})
                            </option>
                        @endforeach
                    </select>

                    <div class="mt-3">
                        @php
                            $routeAdd = auth()->user()->hasRole('admin')
                                ? route('admin.addresses.create')
                                : route('user.addresses.create');
                        @endphp
                        <a href="{{ $routeAdd }}"
                           class="text-xs font-bold text-[#6b1d1d] hover:underline">
                            + Tambah Alamat Baru
                        </a>
                    </div>
                </div>

                {{-- TOTAL --}}
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span>Total Barang</span>
                        <span>{{ collect($cart)->sum('qty') }} pcs</span>
                    </div>

                    <div class="flex justify-between text-xl font-black pt-3 border-t">
                        <span>Total Bayar</span>
                        <span class="text-[#6b1d1d]">
                            Rp {{ number_format(collect($cart)->sum(fn($i) => $i['price'] * $i['qty'])) }}
                        </span>
                    </div>
                </div>

                <button id="payButton"
                    class="w-full bg-[#6b1d1d] hover:bg-[#541616] text-white py-4 rounded-xl font-bold text-lg shadow-lg shadow-red-200 transition-all active:scale-95 disabled:opacity-50"
                    {{ empty($cart) ? 'disabled' : '' }}>
                    Bayar Sekarang
                </button>
            </div>
        </div>

    </div>
</div>

{{-- MIDTRANS --}}
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ env('services.midtrans.clientKey') }}"></script>

<script>
document.getElementById('payButton')?.addEventListener('click', function (e) {
    e.preventDefault();

    const addressId = document.getElementById('addressSelector').value;
    if (!addressId) {
        alert('Silakan pilih alamat pengiriman terlebih dahulu.');
        return;
    }

    const btn = this;
    btn.innerHTML = 'Memproses...';
    btn.disabled = true;

    fetch("{{ route('checkout.store') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({ address_id: addressId })
    })
    .then(res => res.json())
    .then(data => {
        snap.pay(data.snap_token, {
            onSuccess: () => window.location.href = '/',
            onPending: () => location.reload(),
            onError: () => resetBtn(),
            onClose: () => resetBtn()
        });
    })
    .catch(() => resetBtn());

    function resetBtn() {
        btn.innerHTML = 'Bayar Sekarang';
        btn.disabled = false;
    }
});
</script>
@endsection
