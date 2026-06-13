<?php

$apiKey = getenv("OPENAI_API_KEY");

$data = json_decode(file_get_contents("php://input"), true);

$message = $data["message"];

$payload = [
    "model" => "gpt-4.1-mini",
    "messages" => [
        [
            "role" => "system",
            "content" => "You are a helpful customer support assistant."
        ],
        [
            "role" => "user",
            "content" => $message
        ]
    ]
];

$ch = curl_init("https://api.openai.com/v1/chat/completions");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($payload)
]);

$result = curl_exec($ch);
$response = json_decode($result, true);

echo json_encode([
    "answer" => $response["choices"][0]["message"]["content"]
]);