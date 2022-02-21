<div>
    <div class="container">
        <div class="row mt-3">
            <h4>Cadastro de nova tag</h4>
        </div>
        <div class="row mt-2">
            <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <select class="form-control txt-mdmGray" name="category_id" id="category_id" wire:model="data.category_id">
                        <option value="">Categoria</option>
                    </select>
                    @error('data.category_id')
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
    </div>
</div>
