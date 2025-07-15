<x-layout>
    <x-slot:title>Register</x-slot:title>

    <x-auth.layout>
        <form method="post" class="flex flex-col gap-6 items-center w-full">
            <fieldset class="flex flex-col gap-6 w-full">
                <div class="flex max-md:flex-col gap-4">
                    <x-ui.input placeholder="Enter your email address" id="email">
                        <x-slot:label>
                            Email Address
                        </x-slot:label>
                    </x-ui.input>
                    <x-ui.input placeholder="Enter your Username" id="username">
                        <x-slot:label>
                            Username
                        </x-slot:label>
                    </x-ui.input>
                </div>
                <x-ui.input placeholder="Enter your password" type="password" id="username">
                    <x-slot:label>
                        Password
                    </x-slot:label>
                </x-ui.input>
                <x-ui.input placeholder="Re-enter your password" type="password" id="confirm">
                    <x-slot:label>
                        Confirm Password
                    </x-slot:label>
                </x-ui.input>
            </fieldset>
            <x-ui.button type="submit" class="block" variant="pill">Register</x-ui.button>
        </form>
    </x-auth.layout>
</x-layout>
