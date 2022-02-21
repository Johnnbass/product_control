<div>
    <div class="container">
        <div class="row mt-5">
            <h4>Seu negócio administrado de qualquer lugar</h4>
        </div>
        <div class="row mt-3">
            <p>
                O PRODEX é uma ferramenta de gestão de mercadorias que pode ser facilmente implantado
                na sua organização.
            </p>
            <p>
                Como é baseado na web, a plataforma pode ser acessada a partir de
                qualquer dispositivo conectado na internet, possibilitando maior comodidade e conforto
                para o controle do seu negócio. Além disso, proporciona maior segurança, pois
                disponibilizamos uma equipe de suporte 24h para garantir que os seus negócios permaneçam
                sempre sob controle.
            </p>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/products.png') }}" class="img-fluid rounded-start" alt="Produtos">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Produtos</h5>
                                <p class="card-text">
                                    Aqui você pode cadastrar novos produtos
                                </p>
                                <a href="{{ route('products.new') }}" class="btn bg-primary txt-white">
                                    Vamos lá!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/tags.png') }}" class="img-fluid rounded-start" alt="Produtos">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tags</h5>
                                <p class="card-text">
                                    Aqui você pode cadastrar novas tags
                                </p>
                                <a href="{{ route('tags.new') }}" class="btn bg-primary txt-white">
                                    Vamos lá!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/reports.png') }}" class="img-fluid rounded-start" alt="Produtos">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Relatórios</h5>
                                <p class="card-text">
                                    Aqui você pode emitir seus relatórios
                                </p>
                                <a href="{{ route('reports.list') }}" class="btn bg-primary txt-white">
                                    Vamos lá!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
