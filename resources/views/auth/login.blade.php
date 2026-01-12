@extends('layouts.app')

@section('title', 'Masuk - Ayyra Stationery')

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
                Selamat Datang Kembali
            </h2>
            <p class="mt-2 text-[#F3DADA]">
                Masuk untuk melanjutkan aktivitas Anda
            </p>
        </div>

        {{-- ================= LOGIN CARD ================= --}}
        <div class="bg-white rounded-3xl shadow-2xl px-8 py-10">

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

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
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Kata Sandi
                        </label>
                        <a href="{{ route('password.request') }}"
                           class="text-sm font-medium text-[#6B1E23] hover:underline">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <input id="password" name="password" type="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300
                               focus:ring-2 focus:ring-[#6B1E23] focus:outline-none">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox"
                        class="h-4 w-4 text-[#6B1E23] border-gray-300 rounded focus:ring-[#6B1E23]">
                    <label for="remember" class="ml-2 text-sm text-gray-700">
                        Ingat saya
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-[#6B1E23] text-white py-3 rounded-xl
                           font-semibold text-lg hover:bg-[#57171B] transition">
                    Masuk
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

            {{-- Social Login (UI Only) --}}
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

            {{-- Register Link --}}
            <p class="mt-8 text-center text-gray-600 text-sm">
                Belum punya akun?
                <a href="{{ route('register') }}"
                   class="font-semibold text-[#6B1E23] hover:underline">
                    Daftar sekarang
                </a>
            </p>

        </div>
    </div>
</div>
@endsection
