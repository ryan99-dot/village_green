<?php

namespace App\Service;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\RequestStack;


class Panier
{
    private $repo;
    private $session;

    public function __construct(ProduitRepository $repo, RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
        $this->repo = $repo;
    }

    public function add(int $id, int $quantite = 1)
    {
        $panier = $this->session->get('panier', []);

        if (isset($panier[$id])) {
            $panier[$id] += $quantite;
        } else {
            $panier[$id] = $quantite;
        }

        $this->session->set('panier', $panier);
    }


    public function del($id)
    {
        $panier = $this->session->get('panier', []);

        if (isset($panier[$id])) {

            $panier[$id]--;
            if ($panier[$id] == 0) {
                unset($panier[$id]);
            }
        }

        $this->session->set('panier', $panier);
    }

    public function liste()
    {

        $panier = $this->session->get('panier', []);

        return $panier;
    }
}
