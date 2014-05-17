<?php

namespace Devhelp\FlowControlDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OtherController extends Controller
{
    /**
     * @Route("/other", name="no_flow")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function indexAction(Request $request)
    {

    }
}
