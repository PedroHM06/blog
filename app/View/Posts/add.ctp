<form id="addForm">
    <div class="form-group">
        <label for="titulo">Título</label>
        <textarea class="form-control" id="titulo" name="titulo"
            rows="1"></textarea>
    </div>
    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea class="form-control" id="conteudo" name="conteudo"
            rows="5"></textarea>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" id="addButton" onclick="save()" class="btn btn-success">adicionar</button>
    </div>
</form>

    