<x-guest-layout>
    @if (Route::has('login'))
      <livewire:auth.navigation/>
    @endif
    <div>
        <livewire:Article/>
    </div>
</x-guest-layout>