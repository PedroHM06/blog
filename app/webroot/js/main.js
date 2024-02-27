 function index(){
    $.ajax({
        type: "GET",
        url: "posts/index",
        success: function(response) {
          $("#content").html(response);
        },
        error: function(error) {
          
        }
    
    });
 }
 index();
function edit(id){
    $.ajax({
        url: 'posts/edit/'+id,
        type: 'GET',
        success: function(response) {
            $('#editModalBody').html(response);
            $('#editModal').modal('show'); 
        },
        error: function(error) {
            console.error(error);
        }
    });
    
}


function view(id){
    $.ajax({
        url: 'posts/view/'+id,
        type: 'GET',
      
        success: function(response) {

            $('#viewTitulo').val(response.titulo);
            $('#viewConteudo').val(response.conteudo);
                
            $('#viewModalBody').html(response);
            $('#viewModal').modal('show'); 
        },
        error: function(error) {
            console.error(error);
        }
    });
}

function add(){  
    $.ajax({
        type: 'GET',
        url: 'posts/add',
        success:function(response){
            
            $('#addModalBody').html(response);
            $('#addModal').modal('show');

        },
        error: function(error){
            console.error(error);
        },
        
    });
}

function save(id){
    
    let form = (id == undefined) ? $('#addForm') : $('#editForm');
    $.ajax({
        type: 'POST',
        url: 'posts/save/' + id,
        data: form.serialize(),
        success:function(response){
            if(id){
                $('#alert').removeClass().addClass('alert-primary');
                $('#alerttext').html("Post editado com sucesso.");
                $('#alert').show();
                $('#editModal').modal('hide');
                setTimeout(function() {
                    $('#alert').hide();
                }, 5000);
            }else{
                $('#alert').removeClass().addClass('alert-success');
                $('#alerttext').html("Post cadastrado com sucesso.");
                $('#alert').show();
                $('#addModal').modal('hide');
                setTimeout(function() {
                    $('#alert').hide();
                }, 5000);

            }
            index();
        },
        error: function(error){
            console.error(error);
        },  
    });
}
    
function del(id) {
    $.confirm({
        title: 'Confirmar Exclusão',
        columnClass: 'col-md-6 col-md-offset-6',
        content: 'Tem certeza que deseja excluir esse post?',
        type: 'red',
        typeAnimated: true,
        buttons: {
            confirmar: {
                btnClass: 'btn-red',
                action: function(){
                let form = $('#viewForm');
                $.ajax({
                    url: 'posts/delete/' + id,
                    type: 'DELETE',
                    data: form.serialize(),
                    success: function (response) {
                        $('#alert').removeClass().addClass('alert-danger');
                        $('#alerttext').html("Post excluído com sucesso.");
                        $('#alert').show();
                        $('#viewModal').modal('hide');
                        setTimeout(function () {
                            $('#alert').hide();
                        }, 5000);
                        index();
                    },
                    error: function (error) {
                        console.error(error);
                    
                    }
                });
                
            }
        },

            cancel: function () {
              
            }
        }
    });
}


