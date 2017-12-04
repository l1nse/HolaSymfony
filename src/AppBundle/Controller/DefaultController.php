<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/producto", name="producto_list")
     * @Method({"GET"})     
     */
    public function listProducto(Request $request)
    {
        // replace this example code with whatever you need
        return new Response(
                '<html><body>'.'Nro de producto : '.$request->get('nro').'</body></html>'   
        );
    
    }

    /**
     * @Route("/producto/new", name="producto_new")
     * @Method({"POST"})     
     */
    public function newProducto(Request $request)
    {
        // replace this example code with whatever you need
        return new Response(
                json_encode($request->request->all())
        );
    
    }


    /**
     * @Route("/producto/{id}/edit", name="producto_edit")
     * @Method({"PUT"})     
     */
    public function editProducto($id)
    {
        // replace this example code with whatever you need
        return new Response(
            'Editar producto id: '.$id             
        );
    
    }

    /**
     * @Route("/producto/{id}", name="producto_delete")
     * @Method({"DELETE"})     
     */
    public function deleteProducto($id)
    {
        // replace this example code with whatever you need
        return new Response(
            'Borrar producto id: '.$id             
        );
    
    }
}

