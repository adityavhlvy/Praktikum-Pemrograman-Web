<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pendaftaran
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_number = $_POST['id_number'];
    $email = $_POST['email'];
    

    // Validasi data (tambahkan validasi tambahan sesuai kebutuhan)
    if (empty($name) || empty($username) || empty($password) || empty($id_number) || empty($email)) {
        // Data tidak lengkap
        header("Location: registration.html?error=empty");
        exit();
    }

    // Simpan data pengguna dalam sesi
    $_SESSION['user'] = [
        'name' => $name,
        'username' => $username,
        'passowrd' => $password,
        'id_number' => $id_number,
        'email' => $email,
    ];

    // Redirect ke halaman sukses pendaftaran
    header("Location: login.html");
    exit();
} else {
    // Jika tidak ada request POST, kembalikan ke halaman pendaftaran
    header("Location: registration.html");
    exit();
}
?>