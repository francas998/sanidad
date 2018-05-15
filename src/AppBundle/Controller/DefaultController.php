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

        $text = fopen("../web/centinela/anexoa.txt", "w");
        

            // cajetín de títulos
            fwrite($text, "Red"."."."Municipio"."."."MedicoCentinela"."."."Poblacion"."\n");
        
        foreach ($centinela as $cen){
            
            $codigored = $cen->getRed();
                    if (strlen($codigored) == 1 ) {
                    $codigored = 0 . $codigored;
            }
            
            //variable municipio 
            $codigomunicipio = $cen->getMunicipio();
                    if (strlen($codigomunicipio) <= 4 ) {
                 
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
    
    
    
     
    
    ////// Fichero semanal de casos ////
            public function centinelasemanalcasosAction(Request $request){
        //$em = $this->getDoctrine()->getManager();
     $em = $this->getDoctrine()->getEntityManager();
 

//-- Obtenemos todos los elementos de la tabla
        $centinela = $em->getRepository('AppBundle:centinela')->findAll();
        


        $text = fopen("../web/centinela/anexobficherosemanalcasos.txt", "w");
        

            // cajetín de títulos
            fwrite($text, "Clave"."."."Edad"."."."Sexo"."."."AntecedentesVacuna"."\n");
        
       /* foreach ($centinela as $cen){
            //codigo centro ??
            /* $codigocentro = $cen->getCentro();
                    if (strlen($codigocentro) == 1 ) {
                    $codigocentro = 0 . $codigocentro; 
            } */
             
            
            // clave tiene 3 elementos centro+cemana+año //1-8//
            $codigosemana = $cen->getSemana(); 
                    if (strlen($codigosemana) <= 1 ) {
                 
                     $codigosemana = str_pad($codigosemana,  2, "0", STR_PAD_LEFT);
                    }
            
            $codigoanyo = $cen->getAnyo();
                    if (strlen($codigoanyo) <= 3 ) {
                 
                     $codigoanyo = str_pad($codigoanyo,  4, "0", STR_PAD_LEFT);
                    }
            
            $codigocentro = 'XX';
                    
            $clave =  $codigocentro.$codigoasemana.$codigoanyo;
            // clave tiene 3 elementos centro+cemana+año (entre los 3 ocupan 8 caracteres /1-8/
            
            
            
            
            //variable edad  /9-10/
            $codigoedad = $cen->getEdad();
                    if (strlen($codigoedad) <= 1 ) {
                 
                     $codigoedad = str_pad($codigoedad,  2, "0", STR_PAD_LEFT);
                    }
                    
                    
            //variable sexo  /11/
            $codigoedad = $cen->getSexo();
                   /* if (strlen($codigoedad) <= 1 ) {
                 
                     $codigoedad = str_pad($codigoedad,  2, "0", STR_PAD_LEFT);
                    } */
                    
           
            
            //variable antecedentes vacuna /12/
            $codigoantevac = $cen->getAnteVac(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter
                   /* if (strlen($codigoantevac) <= 1 ) {
                 
                     $codigoantevac = str_pad($codigoantevac,  2, "0", STR_PAD_LEFT);
                    }       */ 
             
                    
                    
            
            //variable sistema  /13/
        
        $codigosistema = $cen->getSistema(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter
                   /* if (strlen($codigoistema) <= 1 ) {
                 
                     $codigosistema= str_pad($codigosistema,  2, "0", STR_PAD_LEFT);
                    }   */

            
            //variable toma de muestra /14/
       
        $codigotomamuestra = $cen->getTomamuestra(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter
                   /* if (strlen($codigoistema) <= 1 ) {
                 
                     $codigosistema= str_pad($codigosistema,  2, "0", STR_PAD_LEFT);
                    }   */
            
            //variable fecha inicio muestras /15-22/ 8 caracteres
        $codigofiniciomuestra = $cen->getFImuestra(); // NO OLVIDES crearlo funcion en la entidad,  ddmmaaaa
                   /* if (strlen($codigoistema) <= 1 ) {
                 
                     $codigosistema= str_pad($codigosistema,  2, "0", STR_PAD_LEFT);
                    }   */    
            
            //variable fecha inicio muestras /23-30/ 8 caracteres
        $codigoftomamuestra = $cen->getFTmuestra(); // NO OLVIDES crearlo funcion en la entidad,  ddmmaaaa
                   /* if (strlen($codigoistema) <= 1 ) {
                 
                     $codigosistema= str_pad($codigosistema,  2, "0", STR_PAD_LEFT);
                    }   */    
                
        // variable aislamiento (detección viral)    /31/
        $codigoaisla = $cen->getAisla(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter   
           
        
        // variable tecnica    /32/
        $codigotecnica = $cen->getTecnica(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter 
        
        
        // variable tipo   /33/
        $codigotipo = $cen->getTipo(); // NO OLVIDES crearlo funcion en la entidad, 1 carácter 
        
        
        // variable subtipo /34-39/ 7 caracteres
        $codigosubtipo = $cen->getSubtipo(); // NO OLVIDES crearlo funcion en la entidad, 7 carácter alfanumerico
                    if (strlen($codigosubtipo) <= 6 ) {
                 
                     $codigosubtipo= str_pad($codigosubtipo,  7, "0", STR_PAD_LEFT);
                    }   
        
                    
        // variable cepa referencia /40-69/ 29 caracteres
        $codigoceparef = $cen->getCeparef(); // NO OLVIDES crearlo funcion en la entidad
                    if (strlen($codigoceparef) <= 28 ) {
                 
                     $codigoceparef= str_pad($codigoceparef,  29, "0", STR_PAD_LEFT);
                    } 
        
        
        // variable tos   /70/
        $codigotos = $cen->getTos();      
                    
         
        // variable dolor de garganta  /71/
        $codigogarganta = $cen->getGarganta();  
                    
        
        // variable disnea  /72/
        $codigodisnea = $cen->getDisnea();    

        
        // variable fiebre o febrícula  /73/
        $codigofiebre= $cen->getFiebre(); 
        
        
        // variable malestar general /74/
        $codigomalestar= $cen->getMalestar();
        
        
        // variable malestar general /75/
        $codigocefalea->getCefalea();

        
        // variable malestar general /76/
        $codigomialgia->getMialgia();
        
        
        // variable aparición súbita de sintomas /77/  NO OLVIDES CREARLO EN ENTIDAD
        $codigoaparicionsint->getAparSint();
        
        
        // variable escalofríos /78/  
        $codigoescalofrio->getEscalofrio();
        
        
        // variable aparición súbita de sintomas /79/  NO OLVIDES CREARLO EN ENTIDAD
        $codigocontactoenf->getContactoEnf();
        
        
        // variable complicaciones /80/  
        $codigocomplicaciones->getComplicaciones();
        
        
        // variable complicaciones /81/  
        $codigoderivacion->getDerivacion();
        
        
        // variable enfermedad cardiovascular /82/  
        $codigocardiovascular->getCardiovascular();
        
        
        
        
        
        
        
                    
        // variable medico centinela
        $codigomedcenti = $cen->getMc();
                    if (strlen($codigomedcenti) <= 15 ) {
                     $codigomedcenti = str_pad($codigomedcenti,  16, "0", STR_PAD_LEFT);
            }
             
            
            
            
            
            // variable poblacion
            $codigopoblacion = $cen->getPoblacion();
                    if (strlen($codigopoblacion) <= 3 ) {
                     $codigopoblacion = str_pad($codigopoblacion,  4, "0", STR_PAD_LEFT);
            }
            

            // imprimo en pantalla para comprobar que se ve
            echo  $codigored.".".$codigomunicipio.".".$codigomedcenti.".".$codigopoblacion."<br>";
            
            //fwrite($text, $cen->getRed()."-".$cen->getMunicipio()."-".$cen->getAnyo()."-".$cen->getUsuarioid()."\n");
            
            
            // escribo en el txt
            fwrite($text, $codigored.".".$codigomunicipio.".".$codigomedcenti.".".$codigopoblacion."\n");
            
           // }

    
        
        

        fclose($text);
        //var_dump($centinela);
        return $this->render('default/index.html.twig');
}
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
//}