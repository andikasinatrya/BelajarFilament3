<div>

    @if (session()->has('message'))
        <div class="text-2xl text-white bg-green-400">
            {{ session('message') }}
        </div>
        <button type="button" wire:click='delSession' class="mt-4 bg-gray-500 w-40 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            New Register
        </button>
        @else

        <form method="POST" wire:submit='save' class="mx-auto text-center" enctype="multipart/form-data">
            {{ $this->form }}
            <button type="submit" class="mt-4 bg-green-500 w-40 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Save
            </button>
        </form>
    @endif
</div>
