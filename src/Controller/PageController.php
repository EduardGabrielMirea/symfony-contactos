<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contacto;
class PageController extends AbstractController
{
    private $contactos = [

        1 => ["nombre" => "Juan Pérez", "telefono" => "524142432", "email" => "juanp@ieselcaminas.org"],

        2 => ["nombre" => "Ana López", "telefono" => "58958448", "email" => "anita@ieselcaminas.org"],

        5 => ["nombre" => "Mario Montero", "telefono" => "5326824", "email" => "mario.mont@ieselcaminas.org"],

        7 => ["nombre" => "Laura Martínez", "telefono" => "42898966", "email" => "lm2000@ieselcaminas.org"],

        9 => ["nombre" => "Nora Jover", "telefono" => "54565859", "email" => "norajover@ieselcaminas.org"]

    ];

    #[Route('/contacto/get/{id}', name: 'get')]
    public function getId(int $id, ManagerRegistry $doctrine){
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contacto = $repositorio->find($id);

        return $this->render('contacto/get.html.twig',['contacto'=>$contacto]);
    }
/*hacer el flush*/

    #[Route('/contacto/update/{id}/{nombre}', name: 'update')]
    public function update(int $id,string $nombre ,ManagerRegistry $doctrine){
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contacto = $repositorio->find($id);
        $contacto->setNombre($nombre);
        $entityManager = $doctrine->getManager();
        $entityManager->persist($contacto);
        $entityManager->flush();


        return $this->render('ficha_contacto/get.html.twig',['contacto'=>$contacto]);
    }

    #[Route('/contacto/delete/{id}', name: 'delete')]
    public function delete(int $id,ManagerRegistry $doctrine)
    {
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contacto = $repositorio->find($id);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($contacto);
        $entityManager->flush();

        return new Response("Se ha borrado");
    }

    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/', name: 'inicio')]
    public function inicio(): Response
    {
        return $this->render('inicio.html.twig');
    }
    /*
     * http://127.0.0.1:8080/contacto/1*/
    #[Route('/contacto/{codigo}', name: 'ficha_contacto')]
    public function ficha($codigo): Response
    {
        $contacto = ($this->contactos[$codigo] ?? null);

        return $this->render('ficha_contacto.html.twig', ['contacto' => $contacto]);
    }

    #[Route('/contacto/buscar/{texto}', name: 'buscar_contacto')]
    public function buscar(String $texto): Response
    {
        $resultado = array_filter($this->contactos, function ($contacto) use ($texto) {
            // Convertimos el texto a minúsculas para una búsqueda insensible a mayúsculas
            $texto = strtolower($texto);
            return (strpos(strtolower($contacto['nombre']), $texto) !== false ||
                strpos(strtolower($contacto['telefono']), $texto) !== false);
        });

        return $this->render('lista_contactos.html.twig', ['contactos' => $resultado]);
    }
    /* FALTA INSERTAL CONTACTOS*/

}

