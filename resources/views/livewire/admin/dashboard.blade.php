<div>
    <div class="flex flex-col p-2">
        <h1 class="text-2xl">Dashboard</h1>
        <p class="text-sm">Lets Summarize Statistics</p>

        <div class="flex flex-col mt-3 gap-16 items-start lg:flex-row">

            <div class="card bg-transparent border-base-300 border-2 w-full lg:w-72 shadow-xl">
                <div class="card-body flex justify-center items-center">
                    <h2 class="card-title text-2xl">Total Students</h2>
                    <h1 class="text-6xl font-bold">10</h1>
                    <div class="card-actions justify-center mt-2">
                        <button class="btn btn-primary">View More</button>
                    </div>
                </div>
            </div>

            <div class="card bg-transparent border-base-300 border-2 w-full lg:w-72 shadow-xl">
                <div class="card-body flex justify-center items-center">
                    <h2 class="card-title text-2xl">Total Rooms</h2>
                    <h1 class="text-6xl font-bold">15</h1>
                    <div class="card-actions justify-center mt-2">
                        <button class="btn btn-primary">View More</button>
                    </div>
                </div>
            </div>

            <div class="card bg-transparent border-base-300 border-2 w-full lg:w-72 shadow-xl">
                <div class="card-body flex justify-center items-center">
                    <h2 class="card-title text-2xl">Pending Requests</h2>
                    <h1 class="text-6xl font-bold">1</h1>
                    <div class="card-actions justify-center mt-2">
                        <button class="btn btn-warning">View More</button>
                    </div>
                </div>
            </div>


            <div class="card bg-transparent border-base-300 border-2 w-full lg:w-72 shadow-xl">
                <div class="card-body flex justify-center items-center">
                    <h2 class="card-title text-2xl">Recent Complaints</h2>
                    <h1 class="text-6xl font-bold">2</h1>
                    <div class="card-actions justify-center mt-2">
                        <button class="btn btn-primary">View More</button>
                    </div>
                </div>
            </div>

        </div>

        {{-- Tabs Section --}}
        <div role="tablist" class="tabs tabs-bordered mt-12 tabs-sm overflow-x-scroll lg:tabs-lg">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Recent Students"
                checked="checked" />
            <div role="tabpanel" class="tab-content p-10">
                <div class="overflow-x-scroll">
                    <table class="table table-zebra table-pin-cols table-sm lg:table-lg">

                        <!-- head -->
                        <thead class="text-xl">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Registered Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>Brice Swyre</td>
                                <td>9012346762</td>
                                <td>12-02-24 12:35 PM</td>
                                <td><span class="badge badge-success font-medium text-base-100">Active</span>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <th>2</th>
                                <td>Brice Swyre</td>
                                <td>9012346762</td>
                                <td>12-02-24 12:35 PM</td>
                                <td><span class="badge badge-error font-medium text-base-100">Rejected</span>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <th>3</th>
                                <td>Brice Swyre</td>
                                <td>9012346762</td>
                                <td>12-02-24 12:35 PM</td>
                                <td><span class="badge badge-success font-medium text-base-100">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Brice Swyre</td>
                                <td>9012346762</td>
                                <td>12-02-24 12:35 PM</td>
                                <td><span class="badge badge-info font-medium text-base-100">Approved</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Recent Plans" />
            <div role="tabpanel" class="tab-content p-10">Recent Plans</div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Recent Rooms" />
            <div role="tabpanel" class="tab-content p-10">Recent Rooms</div>
        </div>

    </div>
</div>