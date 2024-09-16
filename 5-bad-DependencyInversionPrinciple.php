<!-- Bad Example: Direct dependency on a specific database implementation. -->

<!-- Violates the Dependency Inversion Principle, which states:
High-level modules should not depend on low-level modules. Both should depend on abstractions.
Abstractions should not depend on details. Details should depend on abstractions. -->

<?php

class MySQLDatabase {    // Low Level Module
    public function connect() {
        // MySQL connection logic
        echo "Connecting to MySQL...\n";
    }
}

class UserService {    // High Level Module
    private $database;

    public function __construct(MySQLDatabase $database) {
        $this->database = $database;
    }

    public function performAction() {
        $this->database->connect();
        echo "Performing user action...\n";
    }
}

// Usage
$database = new MySQLDatabase();
$service = new UserService($database);
$service->performAction();


?>

