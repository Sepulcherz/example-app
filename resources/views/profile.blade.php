<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="login-page">
        <h2>Hi {{Auth::user()->name}}!</h2>
        <p>Welcome to your profile</p>

        </form>
    </div>
</x-app-layout>