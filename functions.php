<?php
    function generatePassword($charLength) {
        $lowercase = "abcdefgijklmnopqrstuvwxyz";
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = "0123456789";
        $symbols = "!@#$%^&*()_+-=[]{}|;:,.<>?";

        $allCharachters = $lowercase . $uppercase . $numbers . $symbols;

        $sumCharacters = strlen($allCharachters);

        $newPassword = "";

        for ($i=0; $i < $charLength; $i++) { 
            $randChar = rand(0, $sumCharacters - 1);

            $newPassword .= $allCharachters[$randChar];
        };

        return $newPassword;

    };
?>