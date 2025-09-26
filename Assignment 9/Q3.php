<?php
$email_addresses = [
    "john@example.com",
    "wrong-email@",
    "me@site",
    "user123@gmail.com",
    "test.email+alias@domain.co.in",
    "invalid-email"
];

$valid_emails = [];
$email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

echo "<h2>Valid Email Addresses</h2>";

foreach ($email_addresses as $email) {
    
    if (preg_match($email_regex, $email)) {
        $valid_emails[] = $email;
    }
}

if (!empty($valid_emails)) {
    echo "<ul>";
    foreach ($valid_emails as $email) {
        echo "<li>" . htmlspecialchars($email) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No valid emails found.</p>";
}
?>
