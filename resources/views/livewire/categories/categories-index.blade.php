<div class="flex justify-center -mx-3 mb-5">
    <div class="grid justify-items-end ">
    <button class="btn-donate mt-20 mr-8" href="/article/create" wire:navigate>
      Ajouter New Categorie
  </button>
      <div class=" w-full max-w-full px-3 mb-6  mx-auto">
        <div class=" relative flex-[1_auto] flex flex-col xl:grid grid-cols- l4 xs:grid-cols-2 g:grid-cols-4 break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
          <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
            {{-- start Titre Table --}}
            <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
              <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                <span class="mr-3 font-bold text-black">List Categorie</span>
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
                      <th class="pb-3 text-center w-96">ACTION</th>
                    </tr> 
                  </thead>
                  {{-- end Name Table --}}
              {{-- start foreach --}}
                  <tbody>
                      @foreach ($categories as $categorie)
                    <tr class="border border-dashed last:border-b-0">
                     
                      <td class="p-3 pr-0 text-center">
                      {{ $categorie->id }}
                      </td>
                      <td class="p-3 pr-0 text-center">
                          {{ $categorie->name }}
                          </td>
                       <td class="p-3 pr-0  text-center ml-10 ">   
                          <form class="flex justify-center items-center ">
                            <button class="edit-button w-10">
                              <a  href="/article/{{ $categorie->id }}/edit" wire:navigate>
                                <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                  <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                              </a>
                              
                            </button>
                              @csrf 
                              @method('DELETE')
                              <div class="m-2">
                                <button
                          class="group relative flex h-10 w-10 flex-col items-center justify-center overflow-hidden rounded-xl border-2 border-red-400 bg-red-600 hover:bg-red-600"

                        type="button"
                        x-on:click="$wire.deletecategorie({{ $categorie->id }})"
                        wire:confirm="Are you sure you want to delete this categorie?"
                        >
                          <svg
                            viewBox="0 0 1.625 1.625"
                            class="absolute -top-7 fill-white delay-100 group-hover:top-6 group-hover:animate-[spin_1.4s] group-hover:duration-1000"
                            height="15"
                            width="15"
                          >
                            <path
                              d="M.471 1.024v-.52a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099h-.39c-.107 0-.195 0-.195-.195"
                            ></path>
                            <path
                              d="M1.219.601h-.163A.1.1 0 0 1 .959.504V.341A.033.033 0 0 0 .926.309h-.26a.1.1 0 0 0-.098.098v.618c0 .054.044.098.098.098h.487a.1.1 0 0 0 .098-.099v-.39a.033.033 0 0 0-.032-.033"
                            ></path>
                            <path
                              d="m1.245.465-.15-.15a.02.02 0 0 0-.016-.006.023.023 0 0 0-.023.022v.108c0 .036.029.065.065.065h.107a.023.023 0 0 0 .023-.023.02.02 0 0 0-.007-.016"
                            ></path>
                          </svg>
                          <svg
                            width="16"
                            fill="none"
                            viewBox="0 0 39 7"
                            class="origin-right duration-500 group-hover:rotate-90"
                          >
                            <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                            <line
                              stroke-width="3"
                              stroke="white"
                              y2="1.5"
                              x2="26.0357"
                              y1="1.5"
                              x1="12"
                            ></line>
                          </svg>
                          <svg width="16" fill="none" viewBox="0 0 33 39" class="">
                            <mask fill="white" id="path-1-inside-1_8_19">
                              <path
                                d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"
                              ></path>
                            </mask>
                            <path
                              mask="url(#path-1-inside-1_8_19)"
                              fill="white"
                              d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"
                            ></path>
                            <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                            <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                          </svg>
                        </button>
                              </div>
                          
                          </form>
                       </td>
                    </tr>
                     {{-- {{ $categories->links() }} --}}
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
    </div>
  