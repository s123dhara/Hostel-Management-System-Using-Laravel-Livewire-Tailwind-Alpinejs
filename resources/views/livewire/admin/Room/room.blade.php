<div>
    <div class="container">

        <div class="flex flex-row">
            <h1 class="text-4xl font-medium">Manage Rooms</h1>
        </div>

        <div class="card bg-transparent w-full mt-5 shadow-lg">
            <div class="card-body">
                <h2 class="card-title text-xl">All Books</h2>
                <div class="flex flex-row justify-between gap-4">
                    <input type="text" class="input input-sm input-bordered w-full rounded-md mb-4 lg:input-md" placeholder="Search..."
                        wire:model.live='search' />

                    <a href="{{ route('admin.addroom') }}" class="btn btn-primary btn-sm lg:btn-md" wire:navigate ><i class="fa-solid fa-plus mr-2" ></i>New Room</a>    
                </div>
                <div class="container overflow-x-auto">
                    <table class="table table-zebra table-pin-cols table-sm lg:table-lg">

                        <!-- head -->
                        <thead class="text-xl">
                            <tr>
                                <th>#</th>
                                <th>Room Number</th>
                                <th>Current Occupancy</th>
                                <th>Floor Number</th>
                                <th>Hostel Name</th>
                                <th>Room Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>101</td>
                                <td>2</td>
                                <td>1</td>
                                <td>A</td>
                                <td>Double</td>
                                <td><span class="badge badge-success font-medium text-base-100">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-sm">Edit</a>
                                    <a class="btn btn-outline btn-sm hover:btn-error">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>101</td>
                                <td>2</td>
                                <td>1</td>
                                <td>A</td>
                                <td>Triple</td>
                                <td><span class="badge badge-error font-medium text-base-100">Reject</span></td>
                                <td>
                                    <a class="btn btn-primary btn-sm">Edit</a>
                                    <a class="btn btn-outline btn-sm hover:btn-error">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>