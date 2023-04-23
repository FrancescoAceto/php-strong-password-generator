<?php 

function CreatePassword($PasswordLength) {
    $lowercase = 'abcdefghilmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHILMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special = '!"£$%&/()=?^';

    $Passwordcomponents = $lowercase . $uppercase . $numbers . $special;

    $ActualPassword = "";


    for ($i=0; $i < $PasswordLength ; $i++) { 
        
        $RandomCharacter = $Passwordcomponents[rand(0, strlen($ActualPassword) - 1)];

        $ActualPassword = $ActualPassword . $RandomCharacter;
    }

    return $ActualPassword;
}

?>