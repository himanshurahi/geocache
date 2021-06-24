@extends('layouts.bootstrap.app')

@section('content')

  

  <textarea id="editor1">
    Welcome to TinyMCE!
  </textarea>
  <button type="button" class="btn btn-primary" id="submit">submit</button>

  
@endsection

@section('scripts')
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });

    $("#submit").click(function(){
       console.log( tinymce.get('editor1').getContent());
    })
  </script>
@endsection


