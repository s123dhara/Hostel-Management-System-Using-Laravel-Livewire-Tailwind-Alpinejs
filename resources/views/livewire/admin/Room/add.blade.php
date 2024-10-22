<div>
    <div class="container">

        <div class="flex flex-row">
            <h1 class="text-4xl font-medium">Add Room</h1>
        </div>

        <form class="form-control lg:w-6/12 h-72 border mt-5 w-full">

            <div class="grid grid-cols-12 gap-4 p-2">
                <!-- First input field (3/12) -->
                <div class="col-span-4">
                    <div class="label">
                        <span class="label-text">Hostel Number</span>
                    </div>
                    <input type="text" placeholder="Type Here..." class="input input-bordered w-full" />
                </div>

                <!-- Second input field (9/12) -->
                <div class="col-span-4">
                    <div class="label">
                        <span class="label-text">Room Number</span>
                    </div>
                    <input type="text" placeholder="Type here..." class="input input-bordered w-full" />
                </div>

                <!-- Second input field (9/12) -->
                <div class="col-span-4">
                    <div class="label">
                        <span class="label-text">Floor Number</span>
                    </div>
                    <input type="text" placeholder="Type here..." class="input input-bordered w-full" />
                </div>
                <!-- Second input field (9/12) -->
                <div class="col-span-4">
                    <div class="label">
                        <span class="label-text">Room Type</span>
                    </div>
                    <input type="text" placeholder="Type here..." class="input input-bordered w-full" />
                </div>
                <!-- Second input field (9/12) -->
                <div class="col-span-4">
                    <div class="label">
                        <span class="label-text">Max Capacity</span>
                    </div>
                    <input type="text" placeholder="Type here..." class="input input-bordered w-full" />
                </div>
                

            </div>

            <div class="grid grid-cols-12 gap-4 p-2">
                <button class="btn btn-success btn-sm text-xs lg:btn-md col-span-2">Create</button>
                <button class="btn btn-error btn-sm text-xs lg:btn-md col-span-2">Delete</button>
            </div>

        </form>



    </div>
</div>