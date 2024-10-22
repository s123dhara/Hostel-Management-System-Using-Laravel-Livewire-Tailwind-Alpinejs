<div>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">Novelty Hostel</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <x-common.themeSwitch />
                <li>
                    <a href="{{ route('login') }}" wire:navigate>Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" wire:navigate>Register</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto">
        <!-- Heading Section -->
        <h1 class="text-6xl font-bold text-center mt-8">Welcome to My Novelty Hostel</h1>
        <!-- Text and Image Section (Side by Side) -->
        <div class="flex flex-col lg:flex-row justify-center items-center mt-4">
            <div class="lg:w-1/2 md:w-3/4 mb-4">
                <p class="text-lg text-center lg:text-left leading-relaxed">
                    Welcome to our <strong class="uppercase">hostel</strong>, where comfort meets community. We offer
                    cozy, modern rooms,
                    high-speed Wi-Fi, and a <strong class="uppercase">vibrant atmosphere</strong>, for travelers and
                    students alike. Our facilities
                    include a spacious lounge, study areas, and a fully equipped kitchen to make your stay
                    as convenient and <strong class="uppercase">enjoyable</strong> as possible.
                </p>
            </div>
            <div class="lg:w-1/2 md:w-3/4 mb-4">
                <img src="{{ asset('images/login-photo.png') }}" alt="Cover Image" class="mx-auto">
            </div>
        </div>

        <!-- Apply Now Button -->
        <div class="flex justify-center mt-6 mb-6">
            <a href="" class="btn btn-lg text-white bg-blue-500 tracking-tighter hover:bg-blue-600 rounded-md">Apply
                Now</a>
        </div>
    </div>


</div>