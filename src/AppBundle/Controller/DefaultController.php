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
        
            
            fwrite($text, "Id"."\t");
            fwrite($text, "Usuarioid"."\t");
            fwrite($text, "Creado"."\t"."\t");
            fwrite($text, "Red"."\t");
            fwrite($text, "Semana"."\t");
            fwrite($text, "Año"."\t");
            fwrite($text, "Edad"."\t");
            fwrite($text, "Sexo"."\t");
            fwrite($text, "Antecedentes"."\t");
            fwrite($text, "Inicio"."\t");
            fwrite($text, "Aparición"."\t");
            fwrite($text, "Tos"."\t");
            fwrite($text, "Garganta"."\t");
            fwrite($text, "Disnea"."\t");
            fwrite($text, "Fiebre"."\t");
            fwrite($text, "Malestar"."\t");
            fwrite($text, "Cefalea"."\t");
            fwrite($text, "Mialgia"."\t");
            fwrite($text, "Escalofrio"."\t");
            fwrite($text, "Cardiovascular"."\t");
            fwrite($text, "Respiratoria"."\t");
            fwrite($text, "Inmunodeficiencia"."\t");
            fwrite($text, "Diabetes"."\t");
            fwrite($text, "Hepatica"."\t");
            fwrite($text, "Renal"."\t");
            fwrite($text, "Embarazo"."\t");
            fwrite($text, "Obesidad"."\t");
            fwrite($text, "Complicaciones"."\t");
            fwrite($text, "Derivación"."\t");
            fwrite($text, "Muestra"."\n");

            
        foreach ($centinela as $cen){
            fwrite($text, $cen->getId()."\t");
            fwrite($text, $cen->getUsuarioid()."\t"."\t");
            $date = $cen->getCreado()->format('d/m/Y');
            fwrite($text, $date."\t");
            fwrite($text, $cen->getRed()."\t");
            fwrite($text, $cen->getSemana()."\t");
            fwrite($text, $cen->getAnyo()."\t");
            fwrite($text, $cen->getEdad()."\t");
            fwrite($text, $cen->getSexo()."\t");
            fwrite($text, $cen->getAntecedentes()."\t");
            fwrite($text, $cen->getInicio()->format('d/m/Y')."\t");
            fwrite($text, $cen->getAparicion()."\t");
            fwrite($text, $cen->getTos()."\t");
            fwrite($text, $cen->getGarganta()."\t");
            fwrite($text, $cen->getDisnea()."\t");
            fwrite($text, $cen->getFiebre()."\t");
            fwrite($text, $cen->getMalestar()."\t");
            fwrite($text, $cen->getCefalea()."\t");
            fwrite($text, $cen->getMialgia()."\t");
            fwrite($text, $cen->getEscalofrio()."\t");
            fwrite($text, $cen->getCardiovascular()."\t");
            fwrite($text, $cen->getRespiratoria()."\t");
            fwrite($text, $cen->getInmunodeficiencia()."\t");
            fwrite($text, $cen->getDiabetes()."\t");
            fwrite($text, $cen->getHepatica()."\t");
            fwrite($text, $cen->getRenal()."\t");
            fwrite($text, $cen->getEmbarazo()."\t");
            fwrite($text, $cen->getObesidad()."\t");
            fwrite($text, $cen->getComplicaciones()."\t");
            fwrite($text, $cen->getDerivacion()."\t");
            fwrite($text, $cen->getMuestra()."\n");
        }
        fclose($text);
        //var_dump($centinela);
        die();
        
    }
    
    /**
     * @Route("/fichero_anual", name="anual")
     */
    public function fichero_poblacion_anualAction(){
        $em = $this->getDoctrine()->getManager();
        $anual = $em->getRepository('AppBundle:centinela')->findAll();
        $fichero = fopen("../web/centinela/fichero_anual.txt", "a+");
        
        fwrite($text, "Red"."\n");
        
        foreach ($anual as $fichero){
            
            fwrite($fichero, $fichero->getRed()."\t");
            //falta población
            //Medico centinela
            //falta municipio
        }
    }
    
}
