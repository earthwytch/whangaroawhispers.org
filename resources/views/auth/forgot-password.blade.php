<x-layouts.auth title="Reset Password">
    <h1 class="text-2xl font-bold mb-4 text-center">Reset your password</h1>
    
    <p class="text-sm text-gray-600 mb-6 text-center">
        Forgot your password? No problem. Let us know your email address and we will email you a password reset link.
    </p>

    @if (session('status'))
        <div class="mb-6 p-4 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-lg text-sm">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-gray-900 text-white font-medium px-5 py-2.5 rounded-lg hover:bg-gray-800 transition-colors shadow-sm">
            Email Password Reset Link
        </button>
    </form>

    <div class="mt-6 text-center">
        <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">&larr; Back to login</a>
    </div>
</x-layouts.auth>