<?php
class PasswordValidationException extends Exception {}

function validatePassword($password) {
    if (strlen($password) < 8) {
        throw new PasswordValidationException("Password must be at least 8 characters long.");
    }
    if (!preg_match('/[A-Z]/', $password)) {
        throw new PasswordValidationException("Password must contain at least one uppercase letter.");
    }
    if (!preg_match('/[0-9]/', $password)) {
        throw new PasswordValidationException("Password must contain at least one digit.");
    }
    if (!preg_match('/[!@#$%^&*()_+={}\[\]:;"\'<>,.?\/~`]/', $password)) {
        throw new PasswordValidationException("Password must contain at least one special character (e.g., @, #, $, %).");
    }

    return true;
}

$test_passwords = [
    "SecureP@ss1", // Valid
    "short@1",     // Too short
    "nouppercase@1",// No uppercase
    "NoDigit@ss",  // No digit
    "NoSpecial123",// No special char
];

echo "<h2>Password Validation Test</h2>";

foreach ($test_passwords as $password_to_test) {
    echo "Testing: **$password_to_test** - ";
    try {
        if (validatePassword($password_to_test)) {
            echo "<span style='color: green;'>Validation **Success**!</span><br>";
        }
    } catch (PasswordValidationException $e) {
        
        echo "<span style='color: red;'>Validation **Failed**: " . htmlspecialchars($e->getMessage()) . "</span><br>";
    }
}
?>
