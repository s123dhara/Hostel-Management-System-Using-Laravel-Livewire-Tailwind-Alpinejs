<div>
    <div>

        <div class="h-screen flex justify-center items-center">

            <form action="" class="w-[500px]" wire:submit='register'>
                <div class="flex justify-between">
                    <div class=" mb-2">
                        <h1 class="text-xl font-bold">Admin | Register</h1>
                        <p class="text-sm ">Create an account</p>
                    </div>
                    <x-common.themeSwitch />
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" wire:model="username" placeholder="Create Your username"
                        class="input input-bordered w-full" />

                    @error('username')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" wire:model="email" placeholder="Enter new Email"
                        class="input input-bordered w-full" />
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password">New Password</label>
                    <input type="password" wire:model="password" placeholder="Create Your Password"
                        class="input input-bordered w-full" />
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="conf_password">Confirm Password</label>
                    <input type="password" wire:model="password_confirmation" placeholder="Rewrite Your Password"
                        class="input input-bordered w-full" />
                    @error('password_confirmation')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3">
                    <button class="btn bg-orange-400 w-full text-white hover:bg-orange-500"
                        wire:model='submit'>Create</button>
                </div>
            </form>
        </div>

    </div>
</div>