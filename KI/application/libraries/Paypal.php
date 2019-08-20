<?php
require_once(dirname(__FILE__) . '/PayPal-PHP-SDK/autoload.php');
use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

class Paypal {
    public function makepayment($amount) {
      $apiContext = new \PayPal\Rest\ApiContext(
              new \PayPal\Auth\OAuthTokenCredential(
                  clientid,     // ClientID
                  secret      // ClientSecret
              )
      );

      $apiContext->setConfig(
            array(
              'mode' => mode
            )
      );
      $setamount = (int) $amount;
      $payer = new \PayPal\Api\Payer();
      $payer->setPaymentMethod('paypal');

      $amount = new \PayPal\Api\Amount();
      $amount->setTotal($setamount);
      $amount->setCurrency('AUD');

      $transaction = new \PayPal\Api\Transaction();
      $transaction->setAmount($amount);

      $redirectUrls = new \PayPal\Api\RedirectUrls();
      $redirectUrls->setReturnUrl(base_url()."payment/success")
          ->setCancelUrl(base_url()."payment/failed");

      $payment = new \PayPal\Api\Payment();
      $payment->setIntent('sale')
          ->setPayer($payer)
          ->setTransactions(array($transaction))
          ->setRedirectUrls($redirectUrls);

      try {
          $payment->create($apiContext);
          $data['paymentID']=$payment->id;
          $data['token'] = $payment->getToken();
          $data['amount'] = $payment->transactions[0]->amount->total;
          $data['currency']= $payment->transactions[0]->amount->currency;
          $data['val']=$payment->getApprovalLink();
          $data['err']=false;
          return $data;
      }
      catch (\PayPal\Exception\PayPalConnectionException $ex) {
          $data['val']=$ex->getData();
          $data['err']=true;
          return $data;
      }
    }

    public function paypalCheck($paymentID,$payerID,$paymentToken){
    $ch = curl_init();
    $clientId = clientid;
    $secret = secret;
    curl_setopt($ch, CURLOPT_URL, PayPal_BASE_URL.'oauth2/token');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    $result = curl_exec($ch);
    $accessToken = null;
    
    if (empty($result)){
        return false;
    }
    else {
        $json = json_decode($result);
        $accessToken = $json->access_token;
        $curl = curl_init(PayPal_BASE_URL.'payments/payment/' . $paymentID);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $accessToken,
        'Accept: application/json',
        'Content-Type: application/xml'
        ));
        $response = curl_exec($curl);
        $result = json_decode($response);
        curl_close($ch);
        curl_close($curl);
        return json_decode(json_encode($result),true);        
    }
}

}

