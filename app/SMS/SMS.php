<?php

namespace App\SMS;

use AfricasTalking\SDK\AfricasTalking;
use App\Order;

class SMS
{
    public $order;
    private $username;
    private $apiKey;
    public $AT;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->username = 'Kilimanjaro_jamia';
        $this->apiKey = '40829ddd39eb5dd3f0b50eedd3e78355a2b82d300b544be255ed1e064a32c5a0';
        $this->AT = new AfricasTalking($this->username, $this->apiKey);
    }

    public function send($receipients = null, $message = null) 
    {
        if($receipients && $message) {
            // Get one of the services
            $sms = $this->AT->sms();

            // Use the service
            $result = $sms->send([
                'to'      => $receipients,
                'message' => $message
            ]);

            return $result;
        }

        return null;
    }
}
