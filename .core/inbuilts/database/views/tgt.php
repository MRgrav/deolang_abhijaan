<?php
// Define directory containing table definitions
$directory = 'tables/';

// Scan directory for custom format files (e.g., .tbl)
$files = glob($directory . '*.tbl');

foreach ($files as $file) {
    // Read file contents
    $fileContent = file_get_contents($file);

    // Parse custom format (example parsing logic)
    $lines = explode("\n", $fileContent);
    $tableDefinition = [
        'table' => '',
        'columns' => []
    ];

    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || strpos($line, '#') === 0) {
            continue; // Skip empty lines or comments (lines starting with #)
        }

        // Parse key-value pairs
        list($key, $value) = explode(':', $line, 2);
        $key = trim($key);
        $value = trim($value);

        if ($key === 'table') {
            $tableDefinition['table'] = $value;
        } elseif ($key === 'columns') {
            // Parse columns section
            while (($line = trim(next($lines))) !== 'end') {
                list($column, $datatype) = explode(':', $line, 2);
                $tableDefinition['columns'][$column] = $datatype;
            }
        }
    }

    // Generate CREATE TABLE SQL statement
    $tableName = $tableDefinition['table'];
    $columns = $tableDefinition['columns'];

    $sql = "CREATE TABLE IF NOT EXISTS $tableName (";
    $sqlColumns = [];
    foreach ($columns as $column => $datatype) {
        $sqlColumns[] = "$column $datatype";
    }
    $sql .= implode(", ", $sqlColumns);
    $sql .= ");";

    // Output or execute SQL statement (depending on your needs)
    echo $sql . "\n";
}
?>
