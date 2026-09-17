<?php

// Repair incomplete Blade asset expressions supplied in several school views.
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/../resources/views/Frontend')) as $file) {
    if (!$file->isFile() || !str_ends_with($file->getFilename(), '.blade.php')) {
        continue;
    }
    $original = file_get_contents($file->getPathname());
    $repaired = preg_replace_callback('/\{\{asset\(\x27([^\x27"\r\n]+)"/', fn ($match) => "{{asset('".$match[1]."')}}\" ", $original);
    if ($original !== $repaired) {
        file_put_contents($file->getPathname(), $repaired);
        echo $file->getFilename().PHP_EOL;
    }
}
