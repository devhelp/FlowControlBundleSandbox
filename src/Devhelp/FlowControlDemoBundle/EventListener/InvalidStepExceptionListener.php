<?php

namespace Devhelp\FlowControlDemoBundle\EventListener;


use Devhelp\FlowControlBundle\Exception\NoValidStepsFoundException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class InvalidStepExceptionListener implements EventSubscriberInterface
{

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        if (!$event->getException() instanceof NoValidStepsFoundException) {
            return;
        }

        $response = new Response('my custom exception handler');

        $event->setResponse($response);
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::EXCEPTION => array('onKernelException'),
        );
    }
}
