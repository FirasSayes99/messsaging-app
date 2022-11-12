


<a href="/Show?id={{ Auth::guard('web')->user()->id }}"> posts </a>
<a href="{{ route('user.profileupdatee') }}">Update profile</a>

<a href="/share?id={{ Auth::guard('web')->user()->id }}">share</a>


<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4> <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form> </div>
                                                      
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                      <img alt="User Pic" src="{{ asset(Auth::guard('web')->user()->avatar) }}" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2>{{ Auth::guard('web')->user()->name }}</h2>
                            <p>an   <b> Employee</b></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>can't talk ,im bussy</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{ Auth::guard('web')->user()->email }}</p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: {{ Auth::guard('web')->user()->created_at }}</div>
                      </div>
                      

                     
                </div>
                
            </div>


            <div>
                <pre>
Welcome {{Auth::guard('web')->user()->name }};
+ تعريف عن الموقع مختصر جدد 
مثلا شارك مع اصدقائك
انشر المرح 
(*مثال*)
[هذا الموقع مصمم لنشر البهجة بين الاصدقاء انسخ الرابط و شارك ]



<input type="text" style="width:250px"   value="127.0.0.1:8000/UserLink?id={{ Auth::guard('web')->user()->id }}" id="myInput">

<button onclick="myFunction()">Copy text</button>

                </pre>
            </div>

            <div>



            
            </div>
            <div>

              <table>
                   <tr>
                       <th>id</th>
                       <th>content</th>
                       <th>category</th>
                   </tr>
                   @foreach ($posts as $post )
                   <tr>
                       <td>{{$post->id}}</td>
                       <td>{{$post->content}}</td>
                       <td>{{$post->category}}</td>
                   </tr>
                   @endforeach
              </table>    
         

            </div>

            
            <tr></tr>
            <tr></tr>


</div>




<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>


<!--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>user Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>{{ Auth::guard('web')->user()->name }}</td>
                                 <td>{{ Auth::guard('web')->user()->email }}</td>

                             </tr>
                         </tbody>
                 </table>


            </div>
        </div>
    </div>
    

</body>
</html>




-->