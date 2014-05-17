<?php

namespace Devhelp\FlowControlDemoBundle\Controller;

use Devhelp\FlowControlDemoBundle\Form\Type\ExampleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Devhelp\FlowControlBundle\FlowConfiguration\Annotation\Flow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/form-flow")
 */
class FormFlowController extends Controller
{
    /**
     * @Flow(name="demo_form_flow", step="step_1")
     * @Route("/step-1", name="form_1")
     * @Method({"GET"})
     * @Template("DevhelpFlowControlDemoBundle::stepWithForm.html.twig")
     */
    public function stepOneAction()
    {
        $form = $this->createForm(new ExampleType());

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Flow(name="demo_form_flow", step="step_2")
     * @Route("/step-2", name="form_2")
     * @Method({"POST"})
     */
    public function stepTwoAction(Request $request)
    {
        $form = $this->createForm(new ExampleType());

        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->redirect($this->generateUrl('form_3'));
        }

        return $this->render(
            "DevhelpFlowControlDemoBundle::stepWithForm.html.twig",
            array('form' => $form->createView()),
            new Response(null, 400)
        );
    }

    /**
     * @Flow(name="demo_form_flow", step="step_3")
     * @Route("/step-3", name="form_3")
     * @Template("DevhelpFlowControlDemoBundle::index.html.twig")
     */
    public function stepThreeAction()
    {
        return array();
    }
}
