@extends('layouts.app')

@section('title', 'Daftar - Ayyra Stationery')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#6B1E23] px-4">
    <div class="max-w-md w-full">

        {{-- ================= BRAND HEADER ================= --}}
        <div class="text-center mb-10">
            <a href="/" class="inline-flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow">
                    <svg class="w-6 h-6 text-[#6B1E23]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </div>
                <span class="text-2xl font-bold text-white tracking-wide">
                    Ayyra <span class="text-[#F3DADA]">Stationery</span>
                </span>
            </a>

            <h2 class="mt-6 text-3xl font-bold text-white">
                Buat Akun Baru
            </h2>
            <p class="mt-2 text-[#F3DADA]">
                Daftar untuk mulai berbelanja di Ayyra Stationery
            </p>
        </div>

        {{-- ================= REGISTER CARD ================= --}}
        <div class="bg-white rounded-3xl shadow-2xl px-8 py-10">

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                {{-- Nama --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Lengkap
                    </label>
                    <input id="name" name="name" type="text" required
                        value="{{ old('name') }}"
                        placeholder="Nama lengkap Anda"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300
                               focus:ring-2 focus:ring-[#6B1E23] focus:outline-none">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Alamat Email
                    </label>
                    <input id="email" name="email" type="email" required
                        value="{{ old('email') }}"
                        placeholder="email@contoh.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300
                               focus:ring-2 focus:ring-[#6B1E23] focus:outline-none">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Kata Sandi
                    </label>
                    <input id="password" name="password" type="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300
                               focus:ring-2 focus:ring-[#6B1E23] focus:outline-none">
                    <p class="mt-1 text-xs text-gray-500">
                        Minimal 8 karakter, kombinasi huruf dan angka
                    </p>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                        Konfirmasi Kata Sandi
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300
                               focus:ring-2 focus:ring-[#6B1E23] focus:outline-none">
                </div>

                {{-- Terms --}}
                <div class="flex items-start">
                    <input id="terms" type="checkbox" required
                        class="mt-1 h-4 w-4 text-[#6B1E23] border-gray-300 rounded
                               focus:ring-[#6B1E23]">
                    <label for="terms" class="ml-3 text-sm text-gray-700">
                        Saya setuju dengan
                        <a href="#" class="font-medium text-[#6B1E23] hover:underline">
                            Syarat & Ketentuan
                        </a>
                        dan
                        <a href="#" class="font-medium text-[#6B1E23] hover:underline">
                            Kebijakan Privasi
                        </a>
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-[#6B1E23] text-white py-3 rounded-xl
                           font-semibold text-lg hover:bg-[#57171B] transition">
                    Daftar Sekarang
                </button>

                {{-- Error Global --}}
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>

            {{-- Divider --}}
            <div class="my-8 flex items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-sm text-gray-500">atau</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            {{-- Social Register (UI Only) --}}
            <div class="grid grid-cols-2 gap-4">
                <button type="button"
                    class="border border-gray-300 rounded-xl py-3
                           text-sm font-medium hover:bg-gray-50 transition">
                    Google
                </button>
                <button type="button"
                    class="border border-gray-300 rounded-xl py-3
                           text-sm font-medium hover:bg-gray-50 transition">
                    Facebook
                </button>
            </div>

            {{-- Login Link --}}
            <p class="mt-8 text-center text-gray-600 text-sm">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                   class="font-semibold text-[#6B1E23] hover:underline">
                    Masuk sekarang
                </a>
            </p>

        </div>
    </div>
</div>
@endsection
