<div>
    <dialog id="logoutModal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Logout</h3>
            <p class="py-2">Are you sure you want to logout?</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-error btn-sm text-white" wire:click='logout'>Logout</button>
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>

</div>