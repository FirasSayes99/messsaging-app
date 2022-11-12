@section('title', 'New Post')
@extends('app.layout')

@section('content')


@if(\Session::has('success'))
        <div class="alert alert-success">
           <p>  {{\Session::get('success') }}</p>
        </div>
    @endif

<h1 class="title">Create a new post xxxxxxxxx</h1> 
<div>  </div>

<form method="post" action="{{ route('posts.store') }}">

    @csrf
   

    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @foreach($data as $data)
      
  

    <div class="field">
        <input type="hidden" name="userid" value="{{ $data->id }}">
    @endforeach 
        <label class="label">Content</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Publish</button>
        </div>
    </div>

    

</form>

<div>
    <center>
    <button onclick="copyToClipboard()">Click me to copy current Url</button>
    
    </center>
</div>


<script>
function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = window.location.href;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
alert("URL Copied 😁.share with your friends 🌸 ");
}
</script>
@endsection

@if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif