<?php
    include __DIR__ . '/variables.php';

    function generatePassword($charLength, $letDuplicateChar, $lowercase, $uppercase, $numbers, $symbols) {

        $allCharachters = $lowercase . $uppercase . $numbers . $symbols;

        $sumCharacters = strlen($allCharachters);

        $newPassword = "";

        for ($i=0; $i < $charLength; $i++) { 
            $randChar = rand(0, $sumCharacters - 1);

            if ($letDuplicateChar == true || !str_contains($newPassword, $allCharachters[$randChar])) {
                $newPassword .= $allCharachters[$randChar];
            }

        };

        return $newPassword;

    };
?>