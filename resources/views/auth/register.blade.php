<x-layouts.auth title="Create an Account">
    <h1 class="text-2xl font-bold mb-6 text-center">Create your account</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" required class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-gray-900 text-white font-medium px-5 py-2.5 rounded-lg hover:bg-gray-800 transition-colors shadow-sm">
            Create Account
        </button>
    </form>

    <div class="mt-6 flex items-center justify-center">
        <div class="w-full border-t border-gray-200"></div>
        <span class="px-3 text-sm text-gray-500 bg-white relative">Or sign up with</span>
        <div class="w-full border-t border-gray-200"></div>
    </div>

    <div class="mt-6">
        <a href="{{ route('google.login') }}" class="w-full bg-white border border-gray-300 text-gray-700 font-medium px-5 py-2.5 rounded-lg hover:bg-gray-50 transition-colors shadow-sm flex items-center justify-center gap-3">
            <svg class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Google
        </a>
    </div>

    <p class="mt-8 text-center text-sm text-gray-600">
        Already have an account? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-800">Sign in</a>
    </p>
</x-layouts.auth>