<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Aluno;


final class AlunoController extends AbstractController
{

    public function listar(): void
    {
        $entityManager = parent::entityManager();

        $repository = $entityManager->getRepository(Aluno::class);

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }

    public function add(): void
    {
        if (true === empty($_POST)) {
            parent::render('alunos/adicionar');
            return;
        }

        $aluno = new Aluno();
        $aluno->name = $_POST['name'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->email = $_POST['email'];
        $aluno->registry = date('YmdHi');
        $aluno->created_at = new \DateTime();

        $entityManager = parent::entityManager();



        //INSERT INTO
        $entityManager->persist($aluno);
        $entityManager->flush();

        header('location: /alunos/adicionar');
    }
}