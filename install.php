<?php

require_once dirname(__FILE__)."config/database.php";

$schema_path = dirname(__FILE__)."resources/database.sql";

// exec("notepad.exe"); //spustí notepad
// exec("mysql_dump -u{$databese['user']} -p{$databese['pass']} -h{$databese['host']} -D{$databese['name']} > {schema_path}"); // musí byť opačná značka
// slúži na vykonanie príkazu na operačnom systéme
exec("mysql -u{$databese['user']} -p{$databese['pass']} -h{$databese['host']} -D{$databese['name']} < {$schema_path}");

?>