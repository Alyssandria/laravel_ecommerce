<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-full max-w-[455px] flex flex-col gap-6 p-6">
            <form method="post" class="flex flex-col gap-6 items-center w-full">
                <fieldset class="flex flex-col gap-6 w-full">
                    <label for="username" class="flex flex-col gap-2">
                        User name
                        <x-input placeholder="Enter your user name" id="username" />
                    </label>
                    <label for="username" class="flex flex-col gap-2">
                        Password
                        <x-input placeholder="Enter your password" type="password" id="username" />
                    </label>
                </fieldset>

                <button type="submit" class="block">Login</button>
            </form>
            <x-oauth />
        </div>
    </div>
</x-layout>
