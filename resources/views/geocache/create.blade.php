<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Geocache') }}
        </h2>
    </x-slot>
    
    <div class="py-1">
        <div class="w-5/6 mx-auto">
         
            <div class="bg-white p-5 shadow-md rounded my-6">
        
                {{-- <label class="text-sm font-bold text-gray-700 tracking-wide">Name</label> --}}
				<form action="/geocache" method="POST">
                    @csrf
                    <input class=" w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 rounded" type="text" placeholder="Name" name="name" value="">
                 <textarea class=" w-full text-base h-48 py-2 mt-4 border-b border-gray-300 focus:outline-none focus:border-indigo-500"  placeholder="Description" name="description" value=""></textarea>
                     <label class="w-52 flex flex-row justify-evenly items-center px-2 py-2 bg-white text-blue-700 rounded-lg tracking-wide uppercase border border-blue-700 cursor-pointer hover:bg-blue-700 hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="leading-normal">Select a file</span>
                    <input type='file' class="hidden" />
                </label>
                <button type="submit" class="bg-white text-blue-700 border-blue-700 mt-5 px-5 py-3 cursor-pointer  text-sm shadow-sm font-medium tracking-wider border rounded hover:shadow-lg hover:bg-blue-700 hover:text-white focus:border-blue-700">Create New</button>
                </form>
            </div>
          </div>
    </div>
</x-app-layout>
