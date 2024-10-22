<div>

  {{-- <div class="navbar bg-base-300"> --}}
    <div class="navbar bg-base-300">
      <div class="flex-1">
        <!-- Toggle Button -->
        <button @click="$dispatch('toggle-sidebar')" class="lg:hidden p-2 bg-gray-500 text-base-100 rounded-md">
          <i class="fa-solid fa-bars"></i>
        </button>
        <a class="btn btn-ghost text-xl">Novelty Hostel </a>
      </div>
      <div class="flex-none">
        <div class="mr-4">
          <x-common.themeSwitch />
        </div>
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img alt="Tailwind CSS Navbar component" src="{{ asset('images/user.jpg') }}" />
            </div>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-4 w-52 p-2 shadow">
            <li>
              <a class="justify-between">
                Profile
                <span class="badge">New</span>
              </a>
            </li>
            <li><a>Settings</a></li>
            <a class="btn btn-sm btn-error text-base-100" onclick="logoutModal.showModal()">Logout</a>
          </ul>
        </div>
      </div>
    </div>
  </div>