<div class="bg-primary">
    <header>
        <div class="container">
            <div class="row header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand txt-white mx-5" href="{{ route('home') }}"><strong>PRODEX</strong></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.list') }}">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tags.list') }}">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reports.list') }}">Relatórios</a>
                                </li>
                            </ul>
                        </div>
                        <div></div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>
