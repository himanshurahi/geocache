@section('title','Edit Plan')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Price') }}
        </h2>
    </x-slot>
    <div class="py-1">
        
        <div class="w-5/6 mx-auto">
            <div class="bg-white p-5 shadow-md rounded my-6">
                <input required class=" w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 rounded mb-4" type="text" placeholder="Plan Name" name="name" id="plan_name" value="{{$plan->name}}">
                <textarea id="editor1">
                    {{$plan->plan}}
                  </textarea>
                  <button type="button" class="bg-white text-blue-700 border-blue-700 mt-5 px-5 py-3 cursor-pointer  text-sm shadow-sm font-medium tracking-wider border rounded hover:shadow-lg hover:bg-blue-700 hover:text-white focus:border-blue-700"  id="submit">Update</button>
          </div>
    </div>
</x-app-layout>
<script>
 tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      height : "400"
    });

    $("#submit").click(function(){
       console.log(tinymce.get('editor1').getContent());
       
       $.ajax({
           url  : "/pricing/{{$plan->id}}/edit",
           method : "PUT",
           data : {data : tinymce.get('editor1').getContent(), 
            "_token": "{{ csrf_token() }}", 
            name : $("#plan_name").val()
            },
           success:function(response) {
            console.log('data saved');
            window.location.href = "/pricing/list";
       },
       error:function(error){
            console.log(error)
       }
       })
    })
</script>
