<?php

namespace Devhelp\FlowControlDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Devhelp\FlowControlBundle\FlowConfiguration\Annotation\Flow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/secure-flow")
 */
class SecureFlowController extends Controller
{
    /**
     * @Flow(name="demo_secure_flow", step="step_1")
     * @Route("/step-1", name="secure_1")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepOneAction()
    {
        return array();
    }

    /**
     * @Flow(name="demo_secure_flow", step="step_2")
     * @Route("/step-2", name="secure_2")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepTwoAction()
    {
        return array();
    }
}
