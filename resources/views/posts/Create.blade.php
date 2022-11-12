@section('title', 'New Post')
@extends('layout')

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
        <label class="label">Category</label>
        <div class="control">
            <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="marriageGreeting" {{ old('category') === 'marriageGreeting' ? 'selected' : null }}>marriage greeting</option>
                    <option value="graduationGongratulations" {{ old('category') === 'graduationGongratulations' ? 'selected' : null }}>graduation congratulations</option>
                    <option value="NewBornCongratulations" {{ old('category') === 'NewBornCongratulations' ? 'selected' : null }}>New born congratulations</option>
                    <option value="HowDoYouSeeMe" {{ old('category') === 'HowDoYouSeeMe' ? 'selected' : null }}>How do you see me ?</option>
                </select>
            </div>
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