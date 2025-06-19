<?php
// subscribe.php
header('Content-Type: application/json');
// Si tu héberges sur le même domaine, tu n'as pas besoin d'Access-Control-Allow-Origin
// header('Access-Control-Allow-Origin: *');

// Lire le JSON brut envoyé
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
$email = isset($data['email']) ? trim($data['email']) : '';

// Validation basique
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(['error' => 'Email invalide.']);
  exit;
}

// Charger / initialiser le fichier
$file = __DIR__ . '/subscribers.json';
$subs = file_exists($file)
  ? json_decode(file_get_contents($file), true)
  : [];

// Vérifier doublon
if (in_array($email, $subs)) {
  http_response_code(409);
  echo json_encode(['error' => 'Vous êtes déjà inscrit·e.']);
  exit;
}

// Ajouter et réécrire
$subs[] = $email;
file_put_contents($file, json_encode($subs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Réponse OK
http_response_code(201);
echo json_encode(['ok' => true]);
