<div>

    <!-- Overlay (Backdrop) -->
    <div x-show="isSidebarOpen" class="h-screen inset-0 bg-zinc-500 opacity-50 z-10 lg:opacity-0"
        @click="isSidebarOpen = false" style="display: none;"
        x-bind:style="isSidebarOpen ? 'display: block;' : 'display: none;'"></div>

    <div class="fixed  top-0 left-0 bottom-0 p-2 w-64 overflow-y-auto bg-base-300 z-20 transition-transform duration-300 ease-in-out lg:block lg:translate-x-0 lg:mt-[4rem]"
        :class="isSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
        @toggle-sidebar.window="isSidebarOpen = !isSidebarOpen">

        <div class="p-4">
            <nav class="space-y-2">

                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-2 rounded" wire:navigate>
                    <i class="fas fa-tachometer-alt-fast mr-2"></i> Dashboard
                </a>
                <hr class="my-2 border-gray-700" />

                {{-- Inventory Section --}}
                <div class="text-sm text-gray-500 font-semibold uppercase">
                    Inventory
                </div>
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-building mr-2"></i>
                        Rooms
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href="{{ route('admin.addroom') }}"
                                    class="flex items-center py-2 px-3 rounded hover:bg-base-100" wire:navigate><i
                                        class="fa-solid fa-plus mr-2"></i> Add New</a></li>
                            <li><a href="{{ route('admin.room') }}" class="flex items-center py-2 px-3 rounded hover:bg-base-100"  ><i
                                        class="fa-solid fa-list mr-2"></i> Manage All</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Students Management -->
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-users mr-2"></i>
                        Students
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href=" rooms/add-room.php"
                                    class="flex items-center py-2 px-3 rounded hover:bg-base-100"><i
                                        class="fa-solid fa-plus mr-2"></i> Add New</a></li>
                            <li><a href=" rooms/" class="flex items-center py-2 px-3 rounded hover:bg-base-100"><i
                                        class="fa-solid fa-list mr-2"></i> Manage All</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-2 border-gray-700" />


                {{-- Grievence Section --}}
                <div class="text-sm text-gray-500 font-semibold uppercase">
                    Grievence
                </div>

                {{-- Complaint Section --}}
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-pen-nib"></i>
                        Complaints
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href="" class="flex items-center py-2 px-3 rounded hover:bg-base-100"><i
                                        class="fa-solid fa-list mr-2"></i> Manage All</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Notice Management -->
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-book mr-2"></i>
                        Notice
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href=" rooms/add-room.php"
                                    class="flex items-center py-2 px-3 rounded hover:bg-base-100"><i
                                        class="fa-solid fa-plus mr-2"></i> Add Notice</a></li>
                            <li><a href=" rooms/" class="flex items-center py-2 px-3 rounded hover:bg-base-100"><i
                                        class="fa-solid fa-list mr-2"></i> Manage All</a></li>
                        </ul>
                    </div>
                </div>
                
                <hr class="my-2 border-gray-700" />

                {{-- Booking Plans --}}
                <div class="text-sm text-gray-500 font-semibold uppercase">
                    Booking Plans
                </div>

                {{-- Add New Plan --}}
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-pen-nib"></i>
                        Plans
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href="" class="flex items-center py-2 px-3 rounded hover:bg-base-100">
                                <i class="fa-solid fa-plus mr-2"></i>Add Plans</a>
                            </li>
                            <li><a href="" class="flex items-center py-2 px-3 rounded hover:bg-base-100">
                                <i class="fa-solid fa-list mr-2"></i>Manage Plan</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Fees Payment --}}
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="checkbox" />
                    <div class="collapse-title">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        Fees Payment
                    </div>
                    <div class="collapse-content">
                        <ul class="pl-4 space-y-2">
                            <li><a href="" class="flex items-center py-2 px-3 rounded hover:bg-base-100">
                                <i class="fa-solid fa-indian-rupee-sign mr-2"></i>Pay Hostel Fees</a>
                            </li>
                            <li><a href="" class="flex items-center py-2 px-3 rounded hover:bg-base-100">
                                <i class="fa-solid fa-list mr-2"></i>Payment History</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <hr class="my-2 border-gray-700" />
        
                <a class="mt-5 btn base-base-300" onclick="logoutModal.showModal()">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout
                </a>    

            </nav>
        </div>
    </div>
</div>