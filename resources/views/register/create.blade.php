<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-grey-100 p-6 rounded-xl border-gray-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register">

                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username"
                        value="{{ old('username') }}" required>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                        required>
                </div>

                <button type="submit">Submit</button>
            </form>
        </main>
    </section>
</x-layout>
