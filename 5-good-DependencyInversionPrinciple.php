<!-- Dependency Inversion Principle :High-level modules should not depend on low-level modules. Both should depend on abstractions. -->
<!-- This principle aims to decouple high-level modules (which provide complex functionality) from low-level modules 
(which provide basic functionality) by introducing an abstraction layer between them. This allows both high-level and 
low-level modules to depend on abstractions rather than on solid implementations, making the system more flexible, extensible,
and maintainable. -->



<!-- Good Example: Depend on an abstraction. -->

<?php

interface Database {  // Abstraction
    public function connect();
}

class MySQLDatabase implements Database {   // Low-Level Module  (Detail)
    public function connect() {
        // MySQL connection logic
        echo "Connecting to MySQL...\n";
    }
}

class PostgreSQLDatabase implements Database {   // Low-Level Module   (Detail)
    public function connect() {
        // PostgreSQL connection logic
        echo "Connecting to PostgreSQL...\n";
    }
}

class UserService {  //High-Level Module :  This class is not concerned with the details of database connections. It depends on the Database abstraction to perform its task. 
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function performAction() {
        $this->database->connect();
        echo "Performing user action...\n";
    }
}

// Usage
$mysqlDatabase = new MySQLDatabase();
$pgsqlDatabase = new PostgreSQLDatabase();

$mysqlService = new UserService($mysqlDatabase);
$pgsqlService = new UserService($pgsqlDatabase);

$mysqlService->performAction();
$pgsqlService->performAction();

?>