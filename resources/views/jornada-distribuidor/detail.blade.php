@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-none">
                <li class="breadcrumb-item font-weight-bold "><a href="#">Home</a></li>
                <li class="breadcrumb-item font-weight-bold "><a href="#">Informatica</a></li>
                <li class="breadcrumb-item font-weight-bold  active" aria-current="page">Apple</li>
            </ol>
        </nav>

        <div class="d-flex">
            <div class="product d-flex align-items-center">
                <div class="">
                    <div class="">
                        <div class="card-img-product d-flex">
                            <div class="min-photo">
                                <ul>
                                    <li><img
                                            src="https://a-static.mlcdn.com.br/88x66/iphone-xr-apple-64gb-preto-61-12mp-ios/magazineluiza/155610600/3fc8b541d620d11fad6b051054033341.jpg"
                                            alt=""></li>
                                    <li><img
                                            src="https://a-static.mlcdn.com.br/88x66/iphone-xr-apple-64gb-preto-61-12mp-ios/magazineluiza/155610600/ee251fceb45e19fb74a1ee1ecf2049ad.jpg"
                                            alt=""></li>
                                    <li><img
                                            src="https://a-static.mlcdn.com.br/88x66/iphone-xr-apple-64gb-preto-61-12mp-ios/magazineluiza/155610600/cb6e45eba2266fd2860c74e5196c7588.jpg"
                                            alt=""></li>
                                </ul>
                            </div>
                            <div class="max-photo">
                                <img
                                    src="https://a-static.mlcdn.com.br/618x463/iphone-xr-apple-64gb-preto-61-12mp-ios/magazineluiza/155610600/046ca7441970f5677a701277854122db.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-product ml-5 col-lg-5">
                <h2>Nome do produto</h2>
                <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, </p>
                <h3> R$ 3.258,00
                    <sub><span>R$ 3.850,00</span></sub>
                </h3>


                {{--                <a href="" class="btn btn-puper"><i class="fas fa-shopping-cart"></i> Comprar</a>--}}
                {{--                <hr>--}}
                <form action="">

                    <div class="options-card">
                        <label for="">
                            Estoque disponível
                        </label>
                        <div class="d-flex">
                            <select name="qtd-produto" id="" class="form-custo-detail mr-2">
                                <option value="" class="form-custo-detail ">Quantidade</option>
                            </select>
                            <input type="text" class="form-custo-detail" placeholder="Calcular frete">
                        </div>

                        <a href="" class="btn-compra">Comprar</a>
                        <a href="" class="btn-add-cart">Adicionar ao carrinho</a>
                        <div class="d-flex">
                            <p>Vendido e entregue por: Nome da loja</p>
                            <p>Avaliação:</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>

        <div class="">
            <div class="">
                <div class="card-body">
                    <h3 class="card-title">Informações do produto</h3>
                    <p class="card-text">
                        O iPhone XR tem tela Liquid Retina de 6,1 polegadas** e seis lindas cores. Face ID avançado para
                        desbloquear o aparelho e acessar apps só com o olhar. Chip A12 Bionic, que usa aprendizado de
                        máquina em tempo real para transformar sua maneira de interagir com fotos, jogos, realidade
                        aumentada e muito mais. Sistema de câmera de 12 MP com modo Retrato, Iluminação de Retrato,
                        efeito bokeh aperfeiçoado e Controle de Profundidade para retratos com qualidade de estúdio.
                        Tudo em um design lindo e resistente a água***Avisos legais:*A duração da bateria varia de
                        acordo com o uso e a configuração. Consulte o site do fabricante para obter mais informações.**A
                        tela tem cantos arredondados. Quando medida como um retângulo, a tela do iPhone XR tem 6,06
                        polegadas na diagonal. A área real de visualização é menor.***O iPhone XR é resistente a
                        respingos, água e poeira e foi testado em condições controladas em laboratório, classificado
                        como IP67 segundo a norma IEC 60529 (profundidade máxima de um metro por até 30 minutos). A
                        resistência a respingos, água e poeira não é uma condição permanente e pode diminuir com o
                        tempo. Não tente recarregar um iPhone molhado. Veja instruções no Manual do Usuário para limpeza
                        e secagem. Danos decorrentes de contato com líquidos não estão incluí dos na
                        garantia.****Carregadores sem fio padrão Qi vendidos separadamente.*****Como parte dos esforços
                        da Apple para atingir seus objetivos ambientais, o iPhone XR não vem com adaptador de energia
                        nem EarPods. Você pode usar o adaptador de energia e os fones de ouvido da Apple que já tenha ou
                        comprar esses acessórios separadamente.
                    </p>

                </div>
            </div>
        </div>


    </div>
@endsection
