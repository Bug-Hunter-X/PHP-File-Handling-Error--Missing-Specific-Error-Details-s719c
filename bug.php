```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
    echo "Error opening file.";
}
```

The error lies in how the error is handled.  Simply echoing "Error opening file." provides no useful information for debugging.  The code lacks specifics, such as the exact error that occurred. 