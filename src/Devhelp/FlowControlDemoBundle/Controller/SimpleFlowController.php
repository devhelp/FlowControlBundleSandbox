<?php

namespace Devhelp\FlowControlDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Devhelp\FlowControlBundle\FlowConfiguration\Annotation\Flow;
use Devhelp\FlowControlBundle\FlowConfiguration\Annotation\DisableAutocommit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/simple-flow")
 */
class SimpleFlowController extends Controller
{
    /**
     * @Flow(name="demo_simple_flow", step="step_1")
     * @Route("/step-1", name="simple_1")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepOneAction()
    {
        return array();
    }

    /**
     * @Flow(name="demo_simple_flow", step="step_2")
     * @Route("/step-2", name="simple_2")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepTwoAction()
    {
        return array();
    }

    /**
     * @Flow(name="demo_simple_flow", step="step_3")
     * @Route("/step-3", name="simple_3")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepThreeAction()
    {
        return array();
    }

    /**
     * @Flow(name="demo_simple_flow", step="step_4")
     * @Route("/step-4", name="simple_4")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepFourAction()
    {
        return array();
    }

    /**
     * @Flow(name="demo_simple_flow", step="step_5")
     * @DisableAutocommit
     * @Route("/step-5", name="simple_5")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepFiveAction()
    {
        return array();
    }
}
