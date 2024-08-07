<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px]  mt-32">
        {{-- Start Button Back --}}
    <div class="flex justify-start items-center mb-4">
        <button class="btn-donate" href="/categorie" wire:navigate>
          Back
      </button>    
    </div>
          {{-- end Button Back --}}
        <form wire:submit="update" class="bg-[#82939f] p-12 rounded-lg shadow-black">
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-white">
                    Name
                </label>
                <input type="text" name="name" id="name" wire:model="name" placeholder="Name Categorie"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('name') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>
            <div>
                <button
                    class="hover:shadow-lg w-full hover:-translate-x-2 transform-none hover:translate-y-1 duration-100 transition-transform rounded-md bg-[#788394] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Mis a jour
                </button>
            </div>
        </form>
    </div>
</div>
