<?php

// Read file
$file = fopen('test.txt', 'r');

if ($file) {
    echo fread($file, filesize('test.txt'));
    fclose($file);
} else {
    echo "Gagal membuka file";
}

// Write file
$file = fopen('test.txt', 'w');

if ($file) {
    fwrite($file, "Hallo ini test\n");
    fclose($file);
    echo "Berhasil menulis";
} else {
    echo "Gagal membuka/membuat file";
}

// Update file
$file = fopen('test.txt', 'a');

if ($file) {
    fwrite($file, "Hallo ini test yang kedua\n");
    fclose($file);
    echo "Berhasil menulis";
} else {
    echo "Gagal membuka/membuat file";
}

// Delete file

if (unlink('test.txt')) {
    echo "Berhasil delete file";
} else {
    echo "Gagal delete file";
}
