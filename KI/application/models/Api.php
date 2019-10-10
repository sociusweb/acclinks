<?php
Class Api extends CI_Model
{
   function requestId(){
      $date = date("Ymdhis", time());
      $date = $date.'548215670100';
      return $date;
   }
   
   function QueryOfferInfo($number){
            $xml = '<?xml version="1.0" encoding="UTF-8"?>
                    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://tempuri.org/ns1.xsd">
                 <soapenv:Header/>
                 <soapenv:Body>
                    <ns1:QueryOfferInfo>
                       <!--Optional:-->
                       <in0>
                          <!--Optional:-->
                          <RequestSource>'.$_SERVER['SERVER_ADDR'].'</RequestSource>
                          <!--Optional:-->
                          <RequestId>'.$this->requestId().'</RequestId>
                          <ServiceNbr>'.$number.'</ServiceNbr>
                       </in0>
                    </ns1:QueryOfferInfo>
                 </soapenv:Body>
              </soapenv:Envelope>';
         $location_URL = locationHost;

         $client = new SoapClient(null, array('location' => $location_URL,'uri'=> "",'trace' => 1,));

         try{
         $order_return = html_entity_decode($client->__doRequest($xml,$location_URL,$location_URL,0));
         $xmlDoc = new DOMDocument();
         $xmlDoc->loadXML($order_return);
         if ($xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue == 'Success') {
               $count = $xmlDoc->getElementsByTagname('OfferDetailCount')[0]->nodeValue;
               $i=0;
               while ( $i< $count) {
                  $data[$i]['OfferId'] = $xmlDoc->getElementsByTagname('OfferId')[$i]->nodeValue;
                  $data[$i]['OfferName'] = $xmlDoc->getElementsByTagname('OfferName')[$i]->nodeValue;
                  $data[$i]['ExpiredDate'] = $xmlDoc->getElementsByTagname('ExpiredDate')[$i]->nodeValue;
                  $data[$i]['FreeVoice'] = $xmlDoc->getElementsByTagname('FreeVoice')[$i]->nodeValue;
                  $data[$i]['FreeSms'] = $xmlDoc->getElementsByTagname('FreeSms')[$i]->nodeValue;
                  $data[$i]['FreeFlux'] = $xmlDoc->getElementsByTagname('FreeFlux')[$i]->nodeValue;
                  $i++;
               }
               if ($count == 0) {
                  $data[0]['error'] = "No plans activated";
               }
            }else {
               $data[0]['error'] = $xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue;
            }
         
         }catch (SoapFault $exception){
         var_dump($exception);
         }
         return $data;
   }

   function QueryBalance($number){
            $xml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://tempuri.org/ns1.xsd">
         <soapenv:Header/>
         <soapenv:Body>
            <ns1:QueryBalance>
               <!--Optional:-->
               <in0>
                  <!--Optional:-->
                  <RequestSource>'.$_SERVER['SERVER_ADDR'].'</RequestSource>
                  <!--Optional:-->
                  <RequestId>'.$this->requestId().'</RequestId>
                  <ServiceNbr>'.$number.'</ServiceNbr>
               </in0>
            </ns1:QueryBalance>
         </soapenv:Body>
      </soapenv:Envelope>';
         $location_URL = locationHost;

         $client = new SoapClient(null, array('location' => $location_URL,'uri'      => "",'trace'    => 1,));
         try{
         $order_return = html_entity_decode($client->__doRequest($xml,$location_URL,$location_URL,0));
         $xmlDoc = new DOMDocument();
         $xmlDoc->loadXML($order_return);
         if ($xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue == 'Success') {
               $data[0]['BalanceType'] = $xmlDoc->getElementsByTagname('BalanceType')[0]->nodeValue;
               $data[0]['ExpiredDate'] = $xmlDoc->getElementsByTagname('ExpiredDate')[0]->nodeValue;
               $data[0]['BalanceAmount'] = $xmlDoc->getElementsByTagname('BalanceAmount')[0]->nodeValue;
            }else {
               $data[0]['error'] = $xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue;
            }
         
         }catch (SoapFault $exception){
         var_dump($exception);
         }
         return $data;
   }

   function ActivateOffer($number,$offerId){
            $xml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://tempuri.org/ns1.xsd">
         <soapenv:Header/>
         <soapenv:Body>
            <ns1:ActivateOffer>
               <!--Optional:-->
               <in0>
                  <!--Optional:-->
                  <RequestSource>'.$_SERVER['SERVER_ADDR'].'</RequestSource>
                  <!--Optional:-->
                  <RequestId>'.$this->requestId().'</RequestId>
                  <ServiceNbr>'.$number.'</ServiceNbr>
                  <OfferId>'.$offerId.'</ServiceNbr>
               </in0>
            </ns1:ActivateOffer>
         </soapenv:Body>
      </soapenv:Envelope>';
         $location_URL = locationHost;

         $client = new SoapClient(null, array('location' => $location_URL,'uri'=> "",'trace'=> 1,));
         try{
         $order_return = html_entity_decode($client->__doRequest($xml,$location_URL,$location_URL,0));
         $xmlDoc = new DOMDocument();
         $xmlDoc->loadXML($order_return);
         if ($xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue == 'Success') {
               $data['success'] = $xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue;
            }else {
               $data['error'] = $xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue;
            }
         
         }catch (SoapFault $exception){
            var_dump($exception);
         }
         return $data;
   }

   function AgentCashPay($number,$amount,$tax){
            $xml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://tempuri.org/ns1.xsd">
                     <soapenv:Header/>
                     <soapenv:Body>
                        <ns1:AgentCashPay>
                           <!--Optional:-->
                           <in0>
                              <!--Optional:-->
                              <RequestSource>'.$_SERVER['SERVER_ADDR'].'</RequestSource>
                              <!--Optional:-->
                              <RequestId>'.$this->requestId().'</RequestId>
                              <AgentId>888888</AgentId>
                              <ObjectType>1</ObjectType>
                              <!--Optional:-->
                              <ObjectValue>'.$number.'</ObjectValue>
                              <PayAmount>'.$amount.'</PayAmount>
                              <TaxFee>'.$tax.'</TaxFee>
                           </in0>
                        </ns1:AgentCashPay>
                     </soapenv:Body>
                  </soapenv:Envelope>';
         $location_URL = locationHost;

         $client = new SoapClient(null, array('location' => $location_URL,'uri' => "",'trace'    => 1,));
         try{
         $order_return = html_entity_decode($client->__doRequest($xml,$location_URL,$location_URL,0));
         $xmlDoc = new DOMDocument();
         $xmlDoc->loadXML($order_return);
         if ($xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue == 'Success') {
               $data[0]['CustomerName'] = $xmlDoc->getElementsByTagname('CustomerName')[0]->nodeValue;
               $data[0]['PayAmount'] = $xmlDoc->getElementsByTagname('PayAmount')[0]->nodeValue;
               $data[0]['Balance'] = $xmlDoc->getElementsByTagname('Balance')[0]->nodeValue;
            }else {
               $data[0]['error'] = $xmlDoc->getElementsByTagname('errmsg')[0]->nodeValue;
            }
         
         }catch (SoapFault $exception){
         var_dump($exception);
         }
         return $data;
   }

   function basic_detail($number){
      $url = apiHost.'/getUserBasicInfo';
      $data = array('SERVICE_NBR' => $number);
      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) { /* Handle error */ }
      return $result;
   }

   function offerList(){
      $url = apiHost.'/getOfferList';
      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST'
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) { /* Handle error */ }
      return $result;
   }

function voice_cdr($number){
      $url = apiHost.'/getKiripatiVoice_CDR';
      $data = array('userNumber' => $number);

      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) { /*Handle error */ }
      return $result;
   }

   function sms_cdr($number){
   $url = apiHost.'/getSMSCDR';
   $data = array('userId' => $number);
      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data),
              'timeout' => 1200
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) { /*Handle error */ }
      return $result;
   } 

   function data_cdr($number){
       $url = apiHost.'/getDataCDR';
         $data = array('userId' => $number);
         // use key 'http' even if you send the request to https://...
         $options = array(
             'http' => array(
                 'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                 'method'  => 'POST',
                 'content' => http_build_query($data),
                 'timeout' => 1200
             )
         );
         $context  = stream_context_create($options);
         $result = file_get_contents($url, false, $context);
         if ($result === FALSE) { /*Handle error */ }
         return $result;
      } 

    function rechargCDR($number){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,apiHost.'/getRechargeCDR');
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('userId' => $number)));

      // Receive server response ...
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $server_output = curl_exec($ch);
      curl_close ($ch);
      return $server_output;
    }

    function transferCDR($number){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,apiHost.'/getTransferCDR');
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('userId' => $number)));

      // Receive server response ...
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $server_output = curl_exec($ch);
      curl_close ($ch);

      return $server_output;

    }

    function sendSms($number,$message){
      $url = apiHost.'/kirpati/sendsms';
      $data = array('message' => $message ,'number' => $number);
      $options = array(
             'http' => array(
                 'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                 'method'  => 'POST',
                 'content' => http_build_query($data),
                 'timeout' => 1200
             )
         );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      echo $result;

    }

        function smssend($number,$message){
      $url = apiHost.'/kirpati/sendsms';
      $data = array('message' => $message ,'number' => $number);
      $options = array(
             'http' => array(
                 'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                 'method'  => 'POST',
                 'content' => http_build_query($data),
                 'timeout' => 1200
             )
         );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      return $result;

    }
}
?>
