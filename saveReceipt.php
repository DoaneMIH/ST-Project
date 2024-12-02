<?php
header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !isset($data['user_id'], $data['receipt_product'], $data['receipt_total'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
    exit();
}

$user_id = $data['user_id'];
$receipt_product = $data['receipt_product'];
$receipt_total = $data['receipt_total'];

require 'database.php';

$stmt = $conn->prepare("INSERT INTO receipt (user_id, receipt_product, receipt_total) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $receipt_product, $receipt_total);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $conn->error]);
}

$stmt->close();
$conn->close();
?>
