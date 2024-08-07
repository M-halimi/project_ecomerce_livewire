<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <div class="mx-auto w-full max-w-[550px] mt-10">
    {{-- start button back --}}
    <div class="flex justify-start items-start mb-4">
  <button class="btn-donate" href="/article" wire:navigate>
    Back
</button>    
    </div>
    {{-- end button Back --}}
      <form wire:submit="update" class="bg-[#c6d1da] p-12 rounded-lg shadow-black">
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
          <div class="mb-5 mr-2">
            <label for="name" class="mb-3 block text-base font-medium text-white">
              Description
            </label>
            <input type="text" name="description" id="description" wire:model="description" placeholder="Description"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                @error('description') 
            <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
        
      <div class="grid grid-cols-2 ">
          <div class="mb-5 mr-2">
            <label for="stock" class="mb-3 block text-base font-medium text-white">
              Stock
            </label>
            <input type="number"  name="stock" id="stock" wire:model="stock" placeholder="stock"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                @error('stock') 
            <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>
        <div class="mb-5 ml-2">
          <label for="price" class="mb-3 block text-base font-medium text-white">
            Price
          </label>
          <input type="number" name="price" id="price" wire:model="price" placeholder="price"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              @error('price') 
          <span class="text-red-500 text-sm">{{ $message }}</span> 
          @enderror
      </div> 
        </div>
        <div class="mb-5">
          <label for="tva" class="mb-3 block text-base font-medium text-white">
            Tva
          </label>
          <input type="number" wire:model="tva" name="tva" id="tva"  placeholder="tva"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              @error('tva') 
          <span class="text-red-500 text-sm">{{ $message }}</span> 
          @enderror
      </div>
        <div class="mb-5">
          <label for="categorie" class="mb-3 block text-base font-medium text-white">
            Categorie
          </label>
          <select wire:model="categorie_id" name="categorie_id" id="categorie_id" 
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >
          >
          <option value="selected">Choiser selecte</option>
          @foreach ($categories as $categorie )
          <option value="{{ $categorie->id }}"{{ $article->categorie_id == $categorie->id ? 'selected' : ' ' }}>{{ $categorie->name }}</option>
          @endforeach
        </select>
              @error('categorie_id') 
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
