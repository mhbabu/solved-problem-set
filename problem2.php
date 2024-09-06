<?php


function authenticate(string $username, string $password, array $users): bool {
    $username = strtolower($username);

    if (isset($users[$username]) && $users[$username] === $password) {
        return true;
    }
    return false;
}

$usersArray = [
    'john_doe' => 'password123',
    'jane_smith' => 'securepass'
];


echo authenticate('john_doe', 'password123', $usersArray) ? 'Authenticated' : 'Failed';
echo "<br>";
echo authenticate('Jane_Smith', 'securepass', $usersArray) ? 'Authenticated' : 'Failed'; 
echo "<br>";
echo authenticate('john_doe', 'wrongpassword', $usersArray) ? 'Authenticated' : 'Failed'; 
echo "<br>";
echo authenticate('non_existent_user', 'password', $usersArray) ? 'Authenticated' : 'Failed';
