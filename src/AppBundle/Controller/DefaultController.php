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
    
  /*  public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    } */
    
    /**
     * @Route("/centinela", name="centinela")
     */
    ////public function centinelaAction(){
        
        
        //// Fichero de poblacion anual ////
        public function centinelaAction(Request $request){
        //$em = $this->getDoctrine()->getManager();
     $em = $this->getDoctrine()->getEntityManager();
 

//-- Obtenemos todos los elementos de la tabla
        $centinela = $em->getRepository('AppBundle:centinela')->findAll();
        
        
       /* $centinela = $em->getRepository('AppBundle:centinela')->createQueryBuilder('p')
        ->where('p.anyo == 2018')
        //->setParameter('', ' ')
        //->orderBy('p.anyo', 'ASC')
        ->getQuery(); */
                
                       /* $centinela=$this->$em->createQuery("SELECT u FROM AppBundle:centinela u WHERE u.anyo = 2018");   
                        
                        $centinela->getResult();*/
        
        
       /* $query = $em->createQueryBuilder('p')
        ->where('p.anyo = 2018')
        //->setParameter('', ' ')
        //->orderBy('p.anyo', 'ASC')
        ->getQuery();
 
$centinela = $query->getResult();
        */
        
        
        
        
        
        

        //$centinela = $em->createQuery('SELECT u FROM AppBundle:centinela u WHERE u.anyo = 2018')->findAll;

        $text = fopen("../web/centinela/anexoa2.txt", "w");
        

            // cajetín de títulos
            fwrite($text, "Red"."."."Municipio"."."."MedicoCentinela"."."."Poblacion"."\n");
        
        foreach ($centinela as $cen){
            
            $codigored = $cen->getRed();
                    if (strlen($codigored) == 1 ) {
                    $codigored = 0 . $codigored;
            }
            
            //variable municipio 
            $codigomunicipio = $cen->getMunicipio();
                    if (strlen($codigored) <= 4 ) {
                 
                     $codigomunicipio = str_pad($codigomunicipio,  5, "0", STR_PAD_LEFT);
                    }
            
            
            // varieble medico centinela
            $codigomedcenti = $cen->getMc();
                    if (strlen($codigomedcenti) <= 15 ) {
                     $codigomedcenti = str_pad($codigomedcenti,  16, "0", STR_PAD_LEFT);
            }
                   

            // varieble poblacion
            $codigopoblacion = $cen->getPoblacion();
                    if (strlen($codigopoblacion) <= 3 ) {
                     $codigopoblacion = str_pad($codigopoblacion,  4, "0", STR_PAD_LEFT);
            }
            

            // imprimo en pantalla para comprobar que se ve
            echo  $codigored.".".$codigomunicipio.".".$codigomedcenti.".".$codigopoblacion."<br>";
            
            //fwrite($text, $cen->getRed()."-".$cen->getMunicipio()."-".$cen->getAnyo()."-".$cen->getUsuarioid()."\n");
            
            
            // escribo en el txt
            fwrite($text, $codigored.".".$codigomunicipio.".".$codigomedcenti.".".$codigopoblacion."\n");
            
            }

    
        
        

        fclose($text);
        //var_dump($centinela);
        return $this->render('default/index.html.twig');
        die();
        
   // } 
    
   
    //} 
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
//}