<x-layout>
    <x-slot:title>Login</x-slot:title>

    <x-auth.layout>
        <form method="post" class="flex flex-col gap-6 items-center w-full">
            @csrf
            <fieldset class="flex flex-col gap-6 w-full">

                <x-ui.input placeholder="Enter your user name" id="username">
                    <x-slot:label>User name</x-slot:label>
                </x-ui.input>

                <x-ui.input placeholder="Enter your password" type="password" id="password">
                    <x-slot:label>Password</x-slot:label>
                </x-ui.input>

            </fieldset>
            <x-ui.button type="submit" class="block" variant="pill">Login</x-ui.button>
        </form>
    </x-auth.layout>
</x-layout>
