# PHP File Handling Error: Missing Specific Error Details

This repository demonstrates a common error in PHP file handling: insufficient error reporting when opening a file. The `fopen()` function can fail for various reasons (file not found, permission issues, etc.), and simply checking the return value and echoing a generic error message isn't helpful for debugging.

The `bug.php` file shows the flawed approach. The improved solution in `bugSolution.php` demonstrates how to obtain and report specific error information using `error_get_last()`.