<div>
    <div class="container">
        <div class="row mt-3">
            <h4>Cadastro de novo produto</h4>
        </div>
        <form wire:model.prevent="save">
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <select class="form-control txt-mdmGray" name="tags" id="tags" wire:model="data.tags">
                            <option value="">Tags</option>
                        </select>
                        @error('data.tags')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <select class="form-control txt-mdmGray" name="status" id="status" wire:model="data.status">
                            <option value="">Status</option>
                            <option value="1">Ativo</option>
                            <option value="2">Desativado</option>
                        </select>
                        @error('data.status')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" wire:model="data.name"
                            placeholder="Nome">
                        @error('data.name')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="brand" id="brand" wire:model="data.brand"
                            placeholder="Marca">
                        @error('data.brand')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" name="quantity" id="quantity"
                            wire:model="data.quantity" placeholder="Quantidade">
                        @error('data.quantity')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="description" rows="5"
                            wire:model="data.description" placeholder="Descrição">
                        </textarea>
                        @error('data.description')
                            <small class="error">* {{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    <button type="submit" class="btn bg-primary txt-white">Salvar</button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                    @if (session()->has('success-message'))
                        <div class="alert alert-success" role="alert">
                            <span>
                                <strong>
                                    {{ session('success-message') }}
                                </strong>
                            </span>
                        </div>
                    @elseif (session()->has('error-message'))
                        <div class="alert alert-danger" role="alert">
                            <span>
                                <strong>
                                    {{ session('error-message') }}
                                </strong>
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
