@extends('templates.default')
@section('title','Contact')
@section('content')
<br>
<br>
    @foreach($contact as $contact)
	
        <div class="col-md-3">
         
                <div class="panel-heading">
				
                  <h5 class="panel-title"><h2><b> My Email :  <p><input type="text" name="pseudo" width="100"/></p> </b></h2></h5>
			
       </div>
                <div class="panel-body">
				
			<h2> <b> My Message : </b> </h2>
			
				<textarea name="nom" style="height:100px; width:500px;"></textarea> 
			
   
                </div>
				
				<br>
         
         &nbsp; &nbsp; My Email : {{$contact->EmailDestinateur}}
		 
				<br>
				  
		 &nbsp; &nbsp; My Message : <b> {{$contact->Message}}    </b>
		 
	
	<br>           
    <br>
	<br>
	
     </div>
	 
       </div> 
    @endforeach
@endsection
