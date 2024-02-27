<form id="viewForm">
    <div class="form-group">
        <center><h2 class="viewTitulo" id="viewTitulo"><?php echo $post['Post']['titulo']?></h2></center>
    </div>
    <div class="form-group">
        <textarea class="form-control text-center" id="viewConteudo" name="conteudo" rows="5"
            disabled><?php echo $post['Post']['conteudo']?></textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
</form>