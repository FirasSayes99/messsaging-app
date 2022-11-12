
<?php echo "user id =".$id ?> <br><br>

@foreach ($data as $Udata)


   User name : {{ $Udata->name}} <br>
   User Email:{{ $Udata->email}}<br>

    
@endforeach



@foreach ($Umessages as $Umessages1)

    Post number: {{$Umessages1->id}}<br>
    content: {{ $Umessages1->content}}

    
@endforeach