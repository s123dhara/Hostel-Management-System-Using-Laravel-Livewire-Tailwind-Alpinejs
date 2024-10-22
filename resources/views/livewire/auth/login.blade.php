<div>
    <div>


        <div class="h-screen flex justify-center items-center">

            <form action="" class="w-[500px]" wire:submit='login'>
                <div class="mb-2">
                    <x-common.alert />
                </div>

                <div class="flex justify-between">
                    <div class=" mb-2">
                        <h1 class="text-xl font-bold">Novelty Hostel | Login</h1>
                        <p class="text-sm">Enter Your Email and Password</p>
                    </div>
                    <x-common.themeSwitch />
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
                    <label for="password">Password</label>
                    <input type="password" wire:model="password" placeholder="Enter Your Password"
                        class="input input-bordered w-full" />
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-3">
                    <button class="btn bg-orange-400 w-full hover:bg-orange-500 text-white" wire:model='submit'>Login</button>
                </div>

                <div class="mb-3">
                    <p class="text-center">---- OR ---- </p>
                    <p class="text-center">Don't have an account? <a href="{{ route('register') }}" wire:navigate
                            class="text-orange-400 font-bold">Register</a></p>


                </div>
            </form>
        </div>

    </div>
</div>
