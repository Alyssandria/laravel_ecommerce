<x-layout>
    <x-slot:title>Login</x-slot:title>

    <x-auth.layout>
        <form method="post" class="flex flex-col gap-6 items-center w-full">
            <fieldset class="flex flex-col gap-6 w-full">
                <label for="username" class="flex flex-col gap-2">
                    User name
                    <x-ui.input placeholder="Enter your user name" id="username" />
                </label>
                <label for="username" class="flex flex-col gap-2">
                    Password
                    <x-ui.input placeholder="Enter your password" type="password" id="username" />
                </label>
            </fieldset>
            <x-ui.button type="submit" class="block" variant="pill">Login</x-ui.button>
        </form>
    </x-auth.layout>
</x-layout>
