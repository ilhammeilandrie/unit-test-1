<?php
// File: test_name.php
require_once "Validator.php";

// Test Case 1: Nama valid (nama lengkap Anda)
try {
    $result = validateName("Ilham Meilandrie Richardo");
    echo "PASS: Nama 'Ilham Meilandrie Richardo' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Ilham Meilandrie Richardo' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 2: Nama tidak valid (mengandung angka)
try {
    $result = validateName("Ilham123");
    echo "PASS: Nama 'Ilham123' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Ilham123' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 3: Nama kosong
try {
    $result = validateName("");
    echo "PASS: Nama kosong diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama kosong tidak diterima. Error: " . $e->getMessage() . "<br>";
}