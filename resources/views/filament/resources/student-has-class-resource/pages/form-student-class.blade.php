<x-filament-panels::page>
    <form method="POST" wire:submit='save'>
        {{ $this->form }}
        <button 
        type="submit" 
        class="mt-4 w-40 bg-green-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
      >
        Save
      </button>
      
    </form>
</x-filament-panels::page>
