<?php

require_once '../vendor/autoload.php';
\Stripe\Stripe::setApiKey(config('services.stripe.Secret_key'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
header('Content-Type: application/json');
$pricing_table_id = isset($_POST['pricing_table_id']) ? $_POST['pricing_table_id'] : '';
try {
    
 
   
$YOUR_DOMAIN = 'http://localhost:8000';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    
    'price' => $pricing_table_id,
    'quantity' => 1,
  ]],
  'mode' => 'subscription',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  'automatic_tax' => [
    'enabled' => true,
  ],
]);
echo json_encode(['sessionId' => $checkout_session->id]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }


}