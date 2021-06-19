<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{$geocache->name}}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class="w-5/6 mx-auto">
            <div class="bg-white shadow-md rounded my-6 p-5">
                <h4 class="font-bold uppercase">Description</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nemo natus, eos possimus at obcaecati amet, dolore suscipit doloremque veniam molestias itaque quisquam! Vel qui facilis cum minima velit amet.</p>
                    <img class="object-contain mt-5 h-48 w-full" src="https://static.coindesk.com/wp-content/uploads/2021/04/dogecoin.jpg">
                 
            </div>
        </div>

        <div class="w-5/6 mx-auto">
            <div class="bg-white shadow-md rounded my-6 p-5">
               
                <form class="w-full  bg-white rounded-lg px-4 pt-2">
                    <div class="flex flex-wrap -mx-3 mb-6">
                       <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                       <div class="w-full md:w-full px-3 mb-2 mt-2">
                          <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                       </div>
                       <div class="w-full md:w-full flex items-start justify-end md:w-full px-3">
                         
                          <div>
                             <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-800 hover:text-white"  value='Post Comment'>
                          </div>
                       </div>
                    </form>
                 
            </div>
        </div>

        
    </div>
</x-app-layout>
