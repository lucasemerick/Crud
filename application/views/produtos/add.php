<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Produto</h3>

    <form action="<?= base_url('produtos/add/new') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Descrição</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="descricao">
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="quantidade">
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Valor</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="valor">
            </div>
            <div class="form-group col-md-3">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor_id">
                    <option value="nada"></option>
                    <?php foreach ($fornecedores as $fornecedor) { ?>
                        <option value="<?= $fornecedor['id'] ?>"><?= $fornecedor['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Categoria</label>
                <select class="form-control" name="categoria_id">
                    <option value="nada"></option>
                    <?php foreach ($categorias as $categoria) { ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('produtos/index') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>