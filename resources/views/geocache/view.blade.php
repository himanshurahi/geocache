<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{$geocache->name}}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class="mx-auto sm:w-11/12 w-5/6">
            <div class="bg-white shadow-md rounded my-6 p-5">
                <h4 class="font-bold uppercase">Description</h4>
                <p>{{$geocache->description}}</p>
                    <img class="object-contain mt-5 h-48 w-full" src="/images/{{$geocache->image}}">
                 
            </div>
        </div>

        <div class="mx-auto sm:w-11/12 w-5/6">
            <div class="bg-white p-10 shadow-md rounded">
                <h3 class="mb-4 text-lg font-semibold text-gray-900">{{count($geocache->comments) > 0 ? "Comments" : "No Comments"}}</h3>
                
                <div class="space-y-4">
                    @foreach ($geocache->comments as $comment)
                    {{-- 2021-06-21 09:24:06 --}}
                    {{-- {{ \Carbon\Carbon::parse($comment->created_at)->format('g:i A') }}  --}}
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                          <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="{{$comment->user->profile_photo_url}}" alt="">
                        </div>
                        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                          <strong>{{$comment->user->name}}</strong> <span class="text-xs text-gray-400"> {{ \Carbon\Carbon::parse($comment->created_at)->format('g:i A, M,y') }} </span>
                          <p class="text-sm">
                            {{$comment->comment}}
                          </p>
                        
                        </div>
                      </div>
                    @endforeach
                   
             
              </div>
             </div>
            <div class="bg-white shadow-md rounded my-6 p-5">
               
                <form class="w-full  bg-white rounded-lg px-4 pt-2" method="POST" action="/comments/{{$geocache->id}}">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                       <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                       <div class="w-full md:w-full px-3 mb-2 mt-2">
                          <textarea name="comment" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                       </div>
                       <div class="w-full md:w-full flex items-start justify-end md:w-full px-3">
                         
                          <div>
                             <input type='submit' class="bg-white text-blue-700 font-medium py-1 px-4 border border-blue-700 rounded-lg tracking-wide mr-1 hover:bg-blue-700 hover:text-white cursor-pointer"  value='Post Comment'>
                          </div>
                       </div>
                    </form>
                 
            </div>
        </div>

        
    </div>
</x-app-layout>
