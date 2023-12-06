<?php

namespace App\Controller;

use App\Entity\Paquet;
use App\Form\PaquetType;
use App\Repository\PaquetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/paquet')]
class PaquetController extends AbstractController
{
    #[Route('/', name: 'app_paquet_index', methods: ['GET'])]
    public function index(PaquetRepository $paquetRepository): Response
    {
        $user=$this->getUser();
        if ($this->getUser() == null ) {
            throw $this->createAccessDeniedException();
        }
        return $this->render('paquet/index.html.twig', [
            'paquets' => $paquetRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_paquet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $paquet = new Paquet();
        $form = $this->createForm(PaquetType::class, $paquet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($paquet);
            $entityManager->flush();

            return $this->redirectToRoute('app_paquet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paquet/new.html.twig', [
            'paquet' => $paquet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paquet_show', methods: ['GET'])]
    public function show(Paquet $paquet): Response
    {
        $user=$this->getUser();
        if ($this->getUser() == null ) {
            throw $this->createAccessDeniedException();
        }
        return $this->render('paquet/show.html.twig', [
            'paquet' => $paquet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_paquet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Paquet $paquet, EntityManagerInterface $entityManager): Response
    {   
        if ($this->getUser() == null ) {
            throw $this->createAccessDeniedException();
        }
        else {
            if ($paquet->getUser() !== $this->getUser() && !in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
                throw $this->createAccessDeniedException();
            }
        }
        $form = $this->createForm(PaquetType::class, $paquet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_paquet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paquet/edit.html.twig', [
            'paquet' => $paquet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paquet_delete', methods: ['POST'])]
    public function delete(Request $request, Paquet $paquet, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() == null ) {
            throw $this->createAccessDeniedException();
        }
        else {
            if ($paquet->getUser() !== $this->getUser() && !in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
                throw $this->createAccessDeniedException();
            }
        }
        if ($this->isCsrfTokenValid('delete'.$paquet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($paquet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_paquet_index', [], Response::HTTP_SEE_OTHER);
    }
}
