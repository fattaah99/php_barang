<?php
include 'config.php';
if (isset($_POST['kode_barang'])) {
    $kodeBarang = $_POST['kode_barang'];

    // Ambil detail produk dari tabel
    // $sql = "SELECT harga_beli FROM barang WHERE kode_barang = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("s", $kodeBarang);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     echo json_encode($row);
    // } else {
    //     echo json_encode([]);
    // }

    // $stmt->close();
    // $conn->close();

    $sql = "SELECT harga_beli FROM barang WHERE kode_barang = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $kodeBarang);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }

    $stmt->close();
    $conn->close();
}
?>