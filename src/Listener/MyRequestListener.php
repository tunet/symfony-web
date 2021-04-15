<?php

namespace App\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;

final class MyRequestListener
{
    public function onKernelRequest(RequestEvent $event): void
    {
//        $event->setResponse(new Response('Forbidden!!!'));
    }
}
