@extends('templates.default')
@section('content')
 @foreach($user as $user)

		
$prenom = $_POST["name"]
$mdp = $_POST["password"]
$mail = $_POST["e-mail"]
   
$requete = "UPDATE users 
			SET name = $prenom
				email = $mail
				password = $mdp";
				
$cnx->query($requete);

echo " Modification éffectué avec succès ! ";
				
   
    @endforeach
	@endsection
