<?php

// Direktori web server yang akan dipindai
define('WEB_DIR', __DIR__);

// Pola backdoor umum yang sering digunakan
define('PATTERNS', [
    'eval(',
    'base64_decode(',
    'shell_exec(',
    'system(',
    'passthru(',
    'exec(',
    'assert(',
    'file_put_contents(',
    'file_get_contents(',
    'preg_replace("/.*e.*"'
]);

// Fungsi untuk memindai file
function scanFiles($dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $result = [];

    foreach ($iterator as $file) {
        if ($file->isFile() && preg_match('/\.php$/i', $file->getFilename())) {
            $content = file_get_contents($file->getPathname());

            foreach (PATTERNS as $pattern) {
                if (strpos($content, $pattern) !== false) {
                    $result[] = "Possible backdoor in: " . $file->getPathname() . " [Pattern: $pattern]";
                    break;
                }
            }
        }
    }

    return $result;
}

// Jalankan pemindaian
echo "<h1>Scanning for backdoor shells...</h1>\n<ul>\n";
$results = scanFiles(WEB_DIR);

if (!empty($results)) {
    foreach ($results as $result) {
        echo "<li>" . htmlspecialchars($result) . "</li>\n";
    }
} else {
    echo "<li>No backdoor patterns found.</li>\n";
}

echo "</ul>\n";

?>
