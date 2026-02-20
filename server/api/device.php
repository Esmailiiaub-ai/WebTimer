<?php

// API endpoint to get device information
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Logic to retrieve device info
    echo json_encode(['status' => 'success', 'message' => 'Device info retrieved']);
}

// API endpoint to create a new device
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Logic to create a new device
    echo json_encode(['status' => 'success', 'message' => 'Device created']);
}

// API endpoint to update device information
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Logic to update device info
    echo json_encode(['status' => 'success', 'message' => 'Device updated']);
}

// API endpoint to delete a device
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Logic to delete a device
    echo json_encode(['status' => 'success', 'message' => 'Device deleted']);
}
?>