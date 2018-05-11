<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\centinela;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/centinela", name="centinela")
     */
    public function centinelaAction(){
        
        $em = $this->getDoctrine()->getManager();
        $centinela = $em->getRepository('AppBundle:centinela')->findAll();
        $text = fopen("../web/centinela/Centinela.txt", "a+");
        
        
        foreach ($centinela as $cen){
            fwrite($text, $cen->getId());
            fwrite($text, $cen->getUsuarioid());
            fwrite($text, $cen->getUsuarioid());
            $date = $cen->getCreado()->format('d/m/Y');
            fwrite($text, $date);
            fwrite($text, $cen->getRed());
            fwrite($text, $cen->getSemana());
            fwrite($text, $cen->getAnyo());
            fwrite($text, $cen->getEdad());
            fwrite($text, $cen->getSexo());
            fwrite($text, $cen->getAntecedentes());
            fwrite($text, $cen->getInicio()->format('d/m/Y'));
            fwrite($text, $cen->getAparicion());
            fwrite($text, $cen->getTos());
            fwrite($text, $cen->getGarganta());
            fwrite($text, $cen->getDisnea());
            fwrite($text, $cen->getFiebre());
            fwrite($text, $cen->getMalestar());
            fwrite($text, $cen->getCefalea());
            fwrite($text, $cen->getMialgia());
            fwrite($text, $cen->getEscalofrio());
            fwrite($text, $cen->getCardiovascular());
            fwrite($text, $cen->getRespiratoria());
            fwrite($text, $cen->getInmunodeficiencia());
            fwrite($text, $cen->getDiabetes());
            fwrite($text, $cen->getHepatica());
            fwrite($text, $cen->getRenal());
            fwrite($text, $cen->getEmbarazo());
            fwrite($text, $cen->getObesidad());
            fwrite($text, $cen->getComplicaciones());
            fwrite($text, $cen->getDerivacion());
            fwrite($text, $cen->getMuestra());
        }
        fclose($text);
        //var_dump($centinela);
        die();
        
    }
    
}
