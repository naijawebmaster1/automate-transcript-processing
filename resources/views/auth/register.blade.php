<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}"> @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <!-- Matric No -->
            <div class="mt-4">
                <x-label for="mat_no" :value="__('Matric No')" />
                <x-input id="mat_no" class="block mt-1 w-full" type="text" name="mat_no" :value="old('mat_no')"
                    required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>
            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" value="user"
                    class="mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="user">User</option>
                    <!-- <option value="admin">Admin</option>
                    <option value="library">Library</option>
                    <option value="Hostel">Hostel</option>
                    <option value="bursar">Bursar</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Security">Security</option>
                    <option value="Sport">Sport</option>
                    <option value="Department">Department</option>
                    <option value="User">User</option>
                    <option value="laboratory">Laboratory</option> -->
                </select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }} </a>
                <x-button class="ml-4"> {{ __('Register') }} </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>