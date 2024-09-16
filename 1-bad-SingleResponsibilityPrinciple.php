<!-- Bad example -->

<?php

class UserManager {
    private $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function logUserActivity($activity) {
        // This should be a separate responsibility
        file_put_contents('user_activity.log', $this->username . ': ' . $activity . PHP_EOL, FILE_APPEND);
    }
}

// Usage
$userManager = new UserManager('Shivang Gupta', 'shivang.gupta@entrata.com');
$userManager->logUserActivity('Logged in successfully');

?>