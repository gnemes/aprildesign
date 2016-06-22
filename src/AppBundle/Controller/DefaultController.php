<?php
/**
 * Gnemes April Design, a simple product display home page for April Design
 * Copyright (C) 2016  German Nemes
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP VERSION 5.6
 *
 * @category  Application
 * @package   GnemesAprildegisn
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/aprildesign
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Default controller Class
 *
 * @category  Application
 * @package   GnemesAprildegisn
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/aprildesign
 */
class DefaultController extends Controller
{
    /**
     * Landing page
     * 
     * @param Request $request Request content
     * 
     * @return twig
     * 
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', 
            array(
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                'almohadones' => $this->_getAlmohadones(),
                'banderines' => $this->_getBanderines(),
            )
        );
    }
    
    private function _getBanderines()
    {
        $banderines = array();
        
        $banderin = array();
        $banderin["new"] = false;
        $banderin["oldprice"] = false; 
        $banderin["price"] = 50; 
        $banderin["img"] = "img/banderines/azul.jpg";
        $banderin["title"] = "Azul";
        $banderin["desc"] = "Banderin Azul. El precio corresponde a un metro."; 
        array_push($banderines, $banderin);
        
        $banderin = array();
        $banderin["new"] = false;
        $banderin["oldprice"] = false; 
        $banderin["price"] = 50; 
        $banderin["img"] = "img/banderines/marinero.jpg";
        $banderin["title"] = "Nautico";
        $banderin["desc"] = "Banderin Nautico. El precio corresponde a un metro."; 
        array_push($banderines, $banderin);
        
        $banderin = array();
        $banderin["new"] = false;
        $banderin["oldprice"] = false; 
        $banderin["price"] = 50; 
        $banderin["img"] = "img/banderines/rosa.jpg";
        $banderin["title"] = "Rosa";
        $banderin["desc"] = "Banderin Rosa. El precio corresponde a un metro."; 
        array_push($banderines, $banderin);
        
        $banderin = array();
        $banderin["new"] = false;
        $banderin["oldprice"] = false; 
        $banderin["price"] = 50; 
        $banderin["img"] = "img/banderines/shabby.png";
        $banderin["title"] = "Shabby Chic";
        $banderin["desc"] = "Banderin Shabby Chic. El precio corresponde a un metro."; 
        array_push($banderines, $banderin);
        
        $banderin = array();
        $banderin["new"] = false;
        $banderin["oldprice"] = false; 
        $banderin["price"] = 50; 
        $banderin["img"] = "img/banderines/violeta.jpg";
        $banderin["title"] = "Violeta";
        $banderin["desc"] = "Banderin Violeta. El precio corresponde a un metro."; 
        array_push($banderines, $banderin);
        
        return $banderines;
    }
    
    private function _getAlmohadones()
    {
        $almohadones = array();
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/bulgaros.jpg";
        $almohadon["title"] = "Bulgaros";
        $almohadon["desc"] = "Almohadones 40x40 con tela Bulgaros"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/mariposas.jpg";
        $almohadon["title"] = "Mariposas";
        $almohadon["desc"] = "Almohadones 40x40 con tela Mariposas"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/globos.jpg";
        $almohadon["title"] = "Globos";
        $almohadon["desc"] = "Almohadones 40x40 con tela Globos"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/flores.jpg";
        $almohadon["title"] = "Flores";
        $almohadon["desc"] = "Almohadones 40x40 con tela Flores"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/aguayo.jpg";
        $almohadon["title"] = "Aguayo";
        $almohadon["desc"] = "Almohadones 40x40 con tela Aguayo"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/chevronaqua.jpg";
        $almohadon["title"] = "Chevron Aqua";
        $almohadon["desc"] = "Almohadones 40x40 con tela Chevron Aqua"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/chevrongris.jpg";
        $almohadon["title"] = "Chevron Gris";
        $almohadon["desc"] = "Almohadones 40x40 con tela Chevron Gris"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/chevronnegro.jpg";
        $almohadon["title"] = "Chevron Negro";
        $almohadon["desc"] = "Almohadones 40x40 con tela Chevron Negro"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/chevronfucsia.jpg";
        $almohadon["title"] = "Chevron Fucsia";
        $almohadon["desc"] = "Almohadones 40x40 con tela Chevron Fucsia"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/nordicaqua.jpg";
        $almohadon["title"] = "Nordic Aqua";
        $almohadon["desc"] = "Almohadones 40x40 con tela Nordic Aqua"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = 200; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/nordicnegro.jpg";
        $almohadon["title"] = "Nordic Negro";
        $almohadon["desc"] = "Almohadones 40x40 con tela Nordic Negro"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = true;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/geoamarillo.jpg";
        $almohadon["title"] = "Geo Amarillo";
        $almohadon["desc"] = "Almohadones 40x40 con tela Geo Amarillo"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/mandalasaqua.jpg";
        $almohadon["title"] = "Mandalas Aqua";
        $almohadon["desc"] = "Almohadones 40x40 con tela Mandalas Aqua"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/mandalasazul.jpg";
        $almohadon["title"] = "Mandalas Azul";
        $almohadon["desc"] = "Almohadones 40x40 con tela Mandalas Azul"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/mandalasrojo.jpg";
        $almohadon["title"] = "Mandalas Roja";
        $almohadon["desc"] = "Almohadones 40x40 con tela Mandalas Roja"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/pichones.jpg";
        $almohadon["title"] = "Pichones";
        $almohadon["desc"] = "Almohadones 40x40 con tela de Pichones"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/triangulos.jpg";
        $almohadon["title"] = "Triangulos";
        $almohadon["desc"] = "Almohadones 40x40 con tela Triangulos"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/mascotas.jpg";
        $almohadon["title"] = "Mascotas";
        $almohadon["desc"] = "Almohadones 40x40 con tela Mascotas"; 
        array_push($almohadones, $almohadon);
        
        $almohadon = array();
        $almohadon["new"] = false;
        $almohadon["sinstock"] = false;
        $almohadon["oldprice"] = false; 
        $almohadon["price"] = 100; 
        $almohadon["img"] = "img/almohadones/nordic50x30.jpg";
        $almohadon["title"] = "Nordic";
        $almohadon["desc"] = "Almohadones 50x30 con tela Mandalas Aqua"; 
        array_push($almohadones, $almohadon);
        
        return $almohadones;
    }
    
    /**
     * PHP Info
     * 
     * @param Request $request Request content
     * 
     * @return twig
     * 
     * @Route("/info", name="phpinfo")
     */
    public function infoAction(Request $request)
    {
        return new Response(
            '<html><body>PHP Info: '.phpinfo().'</body></html>'
        );
    }    
}
