<x-layout>
    <x-slot:title>Register</x-slot:title>

    <x-auth.layout>
        <form method="post" class="flex flex-col gap-6 items-center w-full">
            <fieldset class="flex flex-col gap-6 w-full">
                <div class="flex max-md:flex-col gap-4">
                    <label for="email" class="flex flex-col gap-2">
                        Email Address
                        <x-ui.input placeholder="Enter your email address" id="email" />
                    </label>
                    <label for="username" class="flex flex-col gap-2">
                        Username
                        <x-ui.input placeholder="Enter your Username" id="username" />
                    </label>
                </div>
                <label for="username" class="relative flex flex-col gap-2">
                    Password
                    <x-ui.input placeholder="Enter your password" type="password" id="username" />
                </label>
                <label for="confirm" class="relative flex flex-col gap-2">
                    Confirm Password
                    <x-ui.input placeholder="Re-enter your password" type="password" id="confirm" />
                </label>
            </fieldset>
            <x-ui.button type="submit" class="block" variant="pill">Register</x-ui.button>
        </form>
    </x-auth.layout>
</x-layout>
