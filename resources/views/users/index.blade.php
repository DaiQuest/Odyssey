@extends('templates.default')
@section('content')
 @foreach($user as $user)

		

<h1>&nbsp;Information of {{$user->name}} </h1>
<br>
<br>
	<form action="ModificationProfil.php" method="POST">
	<p>
   <label for="prenom" class="left">&nbsp;	Name : {{$user->name}} </label> 
	<br>
 <label> &nbsp; 	New Name : <input name="name" id="prenom" type="text" size="30" maxlength="30" /></label>
   </p>
  
 <br>
 
   <p>
  <label for="motdepasse" class="left"> &nbsp; Password : {{$user->password}}</label>
  <br>
<label> &nbsp; 	New Password : <input name="password" id="prenom" type="text" size="30" maxlength="30" /></label>
  </p>
  
   <br>
   
  <label for="association" class="left"> &nbsp; E-mail : {{$user->email}} </label> 
    <br>
 <label> &nbsp; 	New E-mail : <input name="e-mail" id="prenom" type="text" size="30" maxlength="30" /></label>
   </p>
   
   <br>
   <br>
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   
   <input type = "submit" value = " Valider " >
   </form>
   
    @endforeach
	@endsection
