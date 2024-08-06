<div>
   
   <h1>halimi update</h1>
   <div>
    <div class="flex justify-center items-center mt-8  grow ">
    <div class="max-w-md max-auto">
    <form  wire:submit="save">
        <div class="grid gap-2 mt-2 w-full">
            <div class="mt-4">
              <span for="name">Name</span>
              <input type="text" wire:model="name" name="name" placeholder="name" class=" shadow-2xl mt-2 x ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
              @error('name') 
              <span class="text-red-400 text-sm">{{ $message }}</span> 
              @enderror
            </div>
         </div>
         <div class="grid gap-2 mt-2 w-full">
          <div class="mt-4">
            <span for="description">Description</span>
            <input type="text" wire:model="description" name="description" placeholder="description" class=" shadow-2xl mt-2 x ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
            @error('description') 
            <span class="text-red-400 text-sm">{{ $message }}</span> 
            @enderror
          </div>
       </div>
       <div class="grid gap-2 mt-2 w-full">
        <div class="mt-4">
          <span for="stock">stock</span>
          <input type="number" wire:model="stock" name="stock" placeholder="stock" class=" shadow-2xl mt-2 x ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
          @error('stock') 
          <span class="text-red-400 text-sm">{{ $message }}</span> 
          @enderror
        </div>
     </div>
     <div class="grid gap-2 mt-2 w-full">
      <div class="mt-4">
        <span for="price">price</span>
        <input type="number" wire:model="price" name="price" placeholder="price" class=" shadow-2xl mt-2 x ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
        @error('price') 
        <span class="text-red-400 text-sm">{{ $message }}</span> 
        @enderror
      </div>
    </div>
        <div class="flex gap-2 mt-2">
          <div class="w-full">
            <label for="tva">Tva</label>
              <input type="number" wire:model="tva" name="tva" placeholder="tva" class=" shadow-2xl mt-2 p-3 ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
              @error('tva') 
              <span class="text-red-400 text-sm">{{ $message }}</span> 
              @enderror
          </div>
          <div  class="w-full">
            <label for="categorie">Categorie</label>
              <select wire:model="categorie_id" name="categorie_id" id="categorie_id" class="  shadow-2xl mt-2  p-3 ex w-full outline-none focus:border-solid focus:border-[1px] border-[#035ec5] placeholder:text-black">
                  <option value="selected">Choiser for Categorie</option>
                  {{-- @if (!empty($articles))  --}}
                  @foreach ($categories as $categorie )
                  <option value="{{ $categorie->id }}"{{ $article->categorie_id == $categorie->id ? 'selected' : ' ' }}>{{ $categorie->name }}</option>
                  @endforeach
                  {{-- @endif   --}}
               </select>
               @error('categorie_id') 
              <span class="text-red-400 text-sm">{{ $message }}</span> 
              @enderror
          </div>  
      </div>
      <div class="mt-4">
        <button class="outline-none glass shadow-2xl   p-3  bg-[#ffffff42] hover:border-[#035ec5] hover:border-solid hover:border-[1px] w-32 hover:text-[#035ec5] font-bold" type="submit">Submit</button>
    
      </div>
    </form>
    </div>
  </div>
</div>
