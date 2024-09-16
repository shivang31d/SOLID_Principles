<!-- Single Responsibility Principle 
Principle: A class should have only one reason to change. This means it should have only one job or responsibility. -->


<!-- Good Example -->

<?php

// Class responsible for managing user data
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
}

// Class responsible for logging user activities
class ActivityLogger {
    public function logActivity(UserManager $user, $activity) {
        $logEntry = $user->getUsername() . ': ' . $activity . PHP_EOL;
        file_put_contents('user_activity.log', $logEntry, FILE_APPEND);
    }
}

// Usage
$userManager = new UserManager('johndoe', 'john@example.com');
$activityLogger = new ActivityLogger();
$activityLogger->logActivity($userManager, 'Logged in successfully');

echo "Activity has been logged.\n";


?>