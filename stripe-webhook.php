<?php 
include 'components/connect.php';

// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51MuzHuFDnv3BUphajEyq8gqprz0TTHoN1ohYAh5hmsymWtRJksJTETN6C8cfOr26UxAed81eqNX2jgxKnYR54vy000WU4jxgLx');

// You can find your endpoint's secret in your webhook settings
$endpoint_secret = 'whsec_...';

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;

try {
  $event = \Stripe\Webhook::constructEvent(
    $payload, $sig_header, $endpoint_secret
  );
} catch(\UnexpectedValueException $e) {
  // Invalid payload
  http_response_code(400);
  exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
  // Invalid signature
  http_response_code(400);
  exit();
}



// Handle the checkout.session.completed event
if ($event->type == 'checkout.session.completed') {
  // Retrieve the session. If you require line items in the response, you may include them by expanding line_items.
  $sessionId = $event->data->object->id;
 

  // Update the row where session id equals -> set the stripe_status to sucess 
  $update_order = $conn->prepare("UPDATE `orders` SET stripe_status	= ? WHERE session_id = ?");
  $update_order->execute(["fulfilled", $sessionId]);
}

http_response_code(200);


?>