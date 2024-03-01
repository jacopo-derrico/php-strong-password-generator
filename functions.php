<?php
    include __DIR__ . '/variables.php';

    function generatePassword($charLength, $letDuplicateChar, $lowercase, $uppercase, $numbers, $symbols) {

        $allCharachters;

        if (isset($_GET['letters']) && $_GET['letters'] == '1') {
            $allCharachters .= $lowercase . $uppercase;
        };

        if (isset($_GET['numbers']) && $_GET['numbers'] == '1') {
            $allCharachters .= $numbers;
        };

        if (isset($_GET['symbols']) && $_GET['symbols'] == '1') {
            $allCharachters .= $symbols;
        };

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