<x-layouts.dashboard>

    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        <h1 class="text-2xl font-bold mb-6">User Settings</h1>

        @if (session('status'))
            <div class="mb-6 p-4 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-lg">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}" class="max-w-md">
            @csrf
            @method('PUT')
            
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" value="{{ Auth::user()->email }}" disabled class="w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm px-4 py-2 text-gray-500 cursor-not-allowed">
            </div>

            @if(Auth::user()->password)
                <div class="mb-6 border-t border-gray-200 pt-6 mt-6">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Update Password</h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                        <input type="password" name="current_password" class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('current_password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                        <input type="password" name="password" class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>
            @else
                <div class="mb-6 p-4 bg-blue-50 border border-blue-200 text-blue-800 rounded-lg text-sm flex gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/></svg>
                    You log in using your Google account. Local password updates are disabled.
                </div>
            @endif

            <button type="submit" class="bg-gray-900 text-white font-medium px-5 py-2.5 rounded-lg hover:bg-gray-800 transition-colors shadow-sm">Save Security Settings</button>
        </form>
    </div>

</x-layouts.dashboard>