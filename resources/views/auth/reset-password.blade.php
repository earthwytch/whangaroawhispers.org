<x-layouts.auth title="Create New Password">
    <h1 class="text-2xl font-bold mb-6 text-center">Create new password</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" name="email" value="{{ old('email', $request->email) }}" required readonly class="w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm px-4 py-2 text-gray-500 cursor-not-allowed">
            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
            <input type="password" name="password" required autofocus class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
            <input type="password" name="password_confirmation" required class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-gray-900 text-white font-medium px-5 py-2.5 rounded-lg hover:bg-gray-800 transition-colors shadow-sm">
            Reset Password
        </button>
    </form>
</x-layouts.auth>