<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', url('/'));
});

// Home > Categorias
Breadcrumbs::for('categorias', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Categorias', route('jornada.categorias'));
});

// Home > Produtos Salão
Breadcrumbs::for('produtos-salao', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Produtos', route('salao.produtos'));
});

// Home > Produtos Distribuidor
Breadcrumbs::for('produtos-distribuidor', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Produtos', route('distribuidor.produtos'));
});

// Home > Categoria > Marca > Produto
Breadcrumbs::for('categoria-produto', function (BreadcrumbTrail $trail, $categoria, $produto) {
    $trail->parent('home');
    $trail->push($categoria, route('salao.produtos.categoria', $categoria));
    $trail->push($produto, route('salao.produtos'));
});


// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});
