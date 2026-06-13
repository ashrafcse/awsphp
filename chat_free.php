<?php

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$message = strtolower(trim($data["message"] ?? ""));

function respond($text) {
    echo json_encode(["answer" => $text]);
    exit;
}

/* -----------------------------
   BASIC KNOWLEDGE BASE (EDIT THIS)
------------------------------ */

$faqs = [
    "hello" => "Hello 👋 How can I help you today?",
    "hi" => "Hi there! Ask me anything about our services.",
    "price" => "Our pricing depends on your project. Contact us for a quote.",
    "contact" => "You can contact us at zamanitc@gmail.com or +491707508637",
    "location" => "We are located in Bielefeld, Germany.",
    "services" => "We offer web development, Docker, AWS, and AI solutions.",
    "docker" => "Yes, we support Docker-based deployments.",
    "aws" => "We deploy scalable applications on AWS EC2 and cloud services.",
    "wordpress" => "We also build WordPress websites.",
"react" => "Yes, we use React for frontend apps.",
"kubernetes" => "We deploy Kubernetes clusters for scaling."
];

/* -----------------------------
   SIMPLE MATCHING ENGINE
------------------------------ */

foreach ($faqs as $key => $answer) {
    if (strpos($message, $key) !== false) {
        respond($answer);
    }
}

/* -----------------------------
   DEFAULT FALLBACK
------------------------------ */

respond("🤖 Sorry, I don't know that yet. Please contact support or ask something else like pricing, services, or contact info.");