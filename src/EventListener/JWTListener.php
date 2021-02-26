<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTInvalidEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTNotFoundEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTExpiredEvent;

class JWTListener
{

    /**
     * TOKEN ERROR -------
     * @param JWTInvalidEvent $event
     */
    public function onJWTInvalid(JWTInvalidEvent $event)
    {
        $response = new JWTAuthenticationFailureResponse('Unauthorized, please login again.', 401);

        $event->setResponse($response);
    }

    /**
     *  NO HEADER AUTHORORIZATION  -------
     * @param JWTNotFoundEvent $event 
     */
    public function onJWTNotFound(JWTNotFoundEvent $event)
    {
        $data = [
            'code'  => '401',
            'message' => 'Unauthorized, token not found.',
        ];

        $response = new JsonResponse($data, 403);

        $event->setResponse($response);
    }

    /**
     * TOKEN EXPIRATION -------
     * @param JWTExpiredEvent $event 
     */
    public function onJWTExpired(JWTExpiredEvent $event)
    {
        /** @var JWTAuthenticationFailureResponse */
        $response = $event->getResponse();

        $response->setMessage('Your token is expired, please renew it.');
    }
}
