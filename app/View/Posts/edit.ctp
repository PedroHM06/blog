<form id="editForm">
    <div class="form-group">
        <label for="campo1">Título</label>
        <textarea class="form-control" id="titulo" name="titulo"
            rows="1"><?php echo $post['Post']['titulo']?></textarea>
    </div>
    <div class="form-group">
        <label for="campo2">Conteúdo</label>
        <textarea class="form-control" id="conteudo" name="conteudo"
            rows="5"><?php echo $post['Post']['conteudo']?></textarea>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" onclick="save(<?= $post['Post']['id'];?>)"  class="btn btn-success">Salvar Alterações</button>
    </div>
</form>

