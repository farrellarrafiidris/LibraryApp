@extends('Layout/layout')
@section('content')
    <div class=" p-10 w-full h-auto">
        <div class=" w-full h-full flex border-2 rounded-xl">
            <div class=" h-full w-[20%] p-7">
                <div class="w-full h-full flex-col">
                    <h1 class="text-center text-xl font-semibold mb-1" >Perpustakaan</h1>
                    <p class="text-xs text-center mb-10">Monday, 20, 5, 2025</p>
                    <div class="mx-5">
                        <button class="bg-lime-300 w-full h-auto py-2 font-semibold rounded-lg border-2 border-slate-200" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">
                            Tambah Buku
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-[2px] h-100 bg-slate-200">
            </div>
            <div class=" h-full w-[80%]">
                <div class="flex">
                    <div class="w-full h-[50px] flex justify-start py-3 px-5">
                      <p class="font-bold text-xl">Table Buku</p>
                    </div>
                    <div class="flex-grow h-[50px] flex justify-end py-3 px-5">
                      <input type="text" class="rounded-md mr-3 bg-slate-200 px-3" placeholder="Search">
                      <button class="bg-lime-200 border-2 border-slate-200 h-[26px] w-[26px] rounded-md">
                        <i class="fa-solid fa-magnifying-glass"></i>
                      </button>
                    </div>
                </div>
                <div class="w-full h-[2px] bg-[#e5e7eb]"></div>
                <div class=" w-full">
                    <table class="table-fixed w-full">
                        <div>
                        <thead>
                            <tr>
                                <th class="p-2 border-r-2 border-slate-200 text-start">Judul</th>
                                <th class="p-2 border-x-2 border-slate-200 text-start">Penerbit</th>
                                <th class="p-2 border-x-2 border-slate-200 text-start">Tahun</th>
                                <th class="p-2 border-l-2 border-slate-200 text-start">Kategori</th>
                                <th class="p-2 border-l-2 border-slate-200 text-start">Jumlah</th>
                                <th class="p-2 border-l-2 border-slate-200 text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody class="mt-5 border-spacing-y-3 ">
                            <tr class="bg-slate-100 border-y-2 border-[#e5e7eb]">
                              <td class="pl-2">Buku 1</td>
                              <td>Gramed</td>
                              <td>1961</td>
                              <td>Ipa</td>
                              <td>200</td>
                              <td class="flex justify-end">
                                <button class="bg-orange-400 my-1 w-[35px] h-[35px] rounded-lg">
                                  <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="my-1 w-[35px] h-[35px] rounded-lg bg-red-400 mx-2">
                                  <i class="fa-solid fa-trash"></i>
                                </button>
                              </td>
                            </tr>
                            <tr class="bg-slate-100 border-y-2 border-[#e5e7eb]">
                                <td class="pl-2">Buku 1</td>
                                <td>Gramed</td>
                                <td>1961</td>
                                <td>Ipa</td>
                                <td>200</td>
                                <td class="flex justify-end">
                                  <button class="bg-orange-400 my-1 w-[35px] h-[35px] rounded-lg">
                                    <i class="fa-solid fa-pen"></i>
                                  </button>
                                  <button class="my-1 w-[35px] h-[35px] rounded-lg bg-red-400 mx-2">
                                    <i class="fa-solid fa-trash"></i>
                                  </button>
                                </td>
                              </tr>
                              <tr class="bg-slate-100 border-y-2 border-[#e5e7eb]">
                                <td class="pl-2">Buku 1</td>
                                <td>Gramed</td>
                                <td>1961</td>
                                <td>Ipa</td>
                                <td>200</td>
                                <td class="flex justify-end">
                                  <button class="bg-orange-400 my-1 w-[35px] h-[35px] rounded-lg">
                                    <i class="fa-solid fa-pen"></i>
                                  </button>
                                  <button class="my-1 w-[35px] h-[35px] rounded-lg bg-red-400 mx-2">
                                    <i class="fa-solid fa-trash"></i>
                                  </button>
                                </td>
                              </tr>
                              <tr class="bg-slate-100 border-y-2 border-[#e5e7eb]">
                                <td class="pl-2">Buku 1</td>
                                <td>Gramed</td>
                                <td>1961</td>
                                <td>Ipa</td>
                                <td>200</td>
                                <td class="flex justify-end">
                                  <button class="bg-orange-400 my-1 w-[35px] h-[35px] rounded-lg">
                                    <i class="fa-solid fa-pen"></i>
                                  </button>
                                  <button class="my-1 w-[35px] h-[35px] rounded-lg bg-red-400 mx-2">
                                    <i class="fa-solid fa-trash"></i>
                                  </button>
                                </td>
                              </tr>
                            
                          </tbody>
                      </table>
                </div>
            </div>  
        </div>
    </div>
    <!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul buku" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penebit</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama penerbit" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tahun" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Kategori</option>
                            <option value="TV">Ipa</option>
                            <option value="PC">IPS</option>
                            <option value="GA">Sejarah</option>
                            <option value="PH">Matematika</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button>
            </form>
        </div>
    </div>
</div> 
@endsection