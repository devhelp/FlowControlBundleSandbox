<?php

namespace Devhelp\FlowControlDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FlowController extends Controller
{
    /**
     * @Template("DevhelpFlowControlDemoBundle::flows.html.twig")
     */
    public function flowsAction(Request $request)
    {
        return array();
    }

    /**
     * @Template("DevhelpFlowControlDemoBundle::steps.html.twig")
     */
    public function previousAction()
    {
        $currentSteps = $this->get('devhelp.flow_control.current_steps');

        return array(
            'label' => 'you were in',
            'empty' => 'you were not in any step',
            'steps' => $currentSteps->all()
        );
    }
}
