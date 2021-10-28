<?php

require_once "database/connection.php";
require "RestrictAccess.php";

// header('Content-Type: application/json');
$data = [
    'labels'    => [],
    'values'    => [],
];

// echo json_encode([0]);

// Prepare a select statement
$sql = "SELECT id, amount FROM graph_data";

if ($stmt = $mysqli->prepare($sql)) {
    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Store result
        $stmt->store_result();

        // Bind result variables
        $id = $amount = 0;
        $stmt->bind_result($id, $amount);
        while ($stmt->fetch()) {
            $data['labels'][] = $id;
            $data['values'][] = $amount;
        }
    }
    else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();

echo json_encode($data);
?>