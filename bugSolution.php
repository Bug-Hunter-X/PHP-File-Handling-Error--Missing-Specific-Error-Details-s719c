```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    $error = error_get_last();
    echo "Error opening file: " . $error['message'] . " (Code: " . $error['type'] . ")\n";
}
```