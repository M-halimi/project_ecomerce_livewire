
    <div class="flex flex-wrap -mx-3 mb-5">
        
        {{-- button Ajouter New Article --}}
        <button class="bg-green-300 ml-10 mt-2 w-24 rounded-md text-black font-bold hover:-translate-y-1 duration-75 hover:bg-slate-700 hover:text-white" href="/article/create" wire:navigate>ajouter</button>
        <div class="w-full max-w-full px-3 mb-6  mx-auto">
          <div class=" relative flex-[1_auto] flex flex-col xl:grid grid-cols- l4 xs:grid-cols-2 g:grid-cols-4 break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
            <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
              {{-- start Titre Table --}}
              <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                  <span class="mr-3 font-bold text-black">List Article</span>
                </h3>
              </div>
              {{-- end Titre Table --}}
              <div class=" block py-8 pt-6 px-9">
                <div class="overflow-x-auto ">
                  <table class="     my-0 align-middle text-dark border-neutral-200">
              {{-- start Name Table  --}}
                    <thead class="align-bottom">
                      <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                        <th class="pb-3 text-center w-96">ID</th>
                        <th class="pb-3 text-center w-96">NAME</th>
                        <th class="pb-3 text-center w-96">DESCRIPTION</th>
                        <th class="pb-3 text-center w-96">PRICE</th>
                        <th class="pb-3  text-center w-96">STOCK</th>
                        <th class="pb-3 text-center w-96">TVA</th>
                        <th class="pb-3 text-center w-96">CATEGORIE</th>
                        <th class="pb-3 text-center w-96">ACTION</th>
                      </tr> 
                    </thead>
                    {{-- end Name Table --}}
                {{-- start foreach --}}
                    <tbody>
                        @foreach ($articles as $article)
                      <tr class="border border-dashed last:border-b-0">
                       
                        <td class="p-3 pr-0 text-center">
                        {{ $article->id }}
                        </td>
                        <td class="p-3 pr-0 text-center">
                            {{ $article->name }}
                            </td>
                        <td class="p-3 pr-0  text-center">
                            {{ $article->description }}
                         </td>
                         <td class="p-3 pr-0  text-center">
                            {{ $article->price }}
                         </td>    
                         <td class="p-3 pr-0  text-center">
                            {{ $article->stock }}
                         </td>
                         <td class="p-3 pr-0  text-center">
                            {{ $article->tva }}
                         </td>
                         <td class="p-3 pr-0  text-center">
                            {{ $article->categorie->name }}
                         </td>
                         <td class="p-3 pr-0  text-center ml-10">   
                            <form >
                                <a  href="/article/{{ $article->id }}/edit" wire:navigate>EDIT</a>
                                @csrf 
                                @method('DELETE')
                                <button
                                    type="button"
                                    x-on:click="$wire.deleteArticle({{ $article->id }})"
                                    wire:confirm="Are you sure you want to delete this Article?"
                                >
                                    DELETE 
                                </button>
                                
                            </form>
                         </td>
                      </tr>
                       {{-- {{ $articles->links() }} --}}
                        @endforeach
                

                    </tbody>
                    
                    {{-- end foreach --}}
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>