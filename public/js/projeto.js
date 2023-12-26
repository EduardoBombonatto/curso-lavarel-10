function deleteRegistroPaginacao(rotaUrl, idDoRegistro){
    if(confirm('Deseja excluir')){
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                id: idDoRegistro,
            },
            beforeSend: function (){
                $.blockUI({
                    message: 'Carregando',
                    timeout: 2000,
                });
            },
        }).done(function (data){
            $.unblockUI();
            if(data.success == true){
                window.location.reload();
            }else{
                alert('Nao foi possivel excluir');
            }
        }).fail(function(data){
            $.unblockUI();
            alert('Nao foi possivel buscar dados');
        });
    }
}