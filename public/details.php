<?php

require_once __DIR__ . '/../config/twig.php';




$products = ['guitare' => "6 cordes", 'bass' => 'n cordes', 'bonjo' => "aucune idée", 'cithare' => "j'ai la flemme de googler", 'lyre' => "+ de cordes", 'harpe' => 'plein de cordes'];
echo $twig->render('details.html.twig', ['products' => $products]);
