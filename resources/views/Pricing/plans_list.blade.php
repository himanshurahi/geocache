@section('title','Plans List') 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="w-5/6 mx-auto">
          <div class="mt-10">
            <a href="/pricing/create" class="bg-green-600 px-5 py-3 cursor-pointer  text-sm shadow-sm font-medium tracking-wider border text-green-100 rounded-full hover:shadow-lg hover:bg-green-700">Create New</a>
          </div>
            <div class="bg-white shadow-md rounded my-6">
              <table class="text-center w-full border-collapse">
                <thead>
                  <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($plans as $plan)
                  <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{$plan->name}}</td>
                    <td class="py-4 px-6 border-b border-grey-light ">
                      <div class="flex justify-center">
                        <a href="/pricing/{{$plan->id}}/edit" class="mr-2 text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-400 text-white">Edit</a>
                      <form class="ml-2" action="/pricing/{{$plan->id}}" method="post" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method("Delete")
                        <button type="submit" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-400 text-white">Delete</button>
                      </form>
                      </div>
                    </td>
                  </tr>   
                  @endforeach
                  
                 
                </tbody>
              </table>
            </div>
          </div>
    </div>

 
</x-app-layout>
