tabel_user();

//Ajax simpan
$('#form_user').submit(function(e) {

  e.preventDefault();

  var form     = $("#form_user")[0]; // sama dengan [ document.forms['form-1'] ]
  var formData = new FormData(form); // Form yang ada file-upload
  var id       = $('input[name=user_id]').val();

  if(id) {
    formData.append('id_ajax', id);
    $.ajax({
        url: base_url + '/admin/user/edit',
        data: formData,
        type: "POST",
        contentType: false, // NEEDED, JANGAN HAPUS
        processData: false, // BUTUH, JANGAN HAPUS
        success: function(data) {
          alert(data);
          tabel_user();
          reset_form();
        }
      });
  } else {
    $.ajax({
        url: base_url + '/admin/user/add',
        data: formData,
        type: "POST",
        contentType: false, // NEEDED, JANGAN HAPUS
        processData: false, // BUTUH, JANGAN HAPUS
        success: function(data) {
          alert(data);
          tabel_user();
          reset_form();
        }
      });
  }
  
});


//Ajax Load Data ke Form untuk Edit
$('#table_user').on('click', '.btn-delete', function() {
    var id = $(this).attr('data-id');
    var tanya = confirm("Data yang sudah dihapus tidak dapat dipulihkan. Anda yakin?");

    if(tanya) {
        $.ajax({
            url: base_url + '/admin/user/delete',
            data: {id_ajax:id},
            type: "POST",
            success: function(data) {
              alert(data);
              tabel_user();
            }
        });
    }
});

//Ajax Load Data ke Form untuk Edit
$('#table_user').on('click', '.btn-edit', function() {
    var id = $(this).attr('data-id');

     $.ajax({
        url: base_url + '/admin/user/get_one',
        data: {id_ajax:id},
        type: "POST",
        dataType: "json",
        success: function(data) {
            $('input[name=user_id]').val(data.user_id);
            $('input[name=foto]').val(data.user_foto);
            $('input[name=user_username]').val(data.user_username);
            $('input[name=user_fullname]').val(data.user_fullname);

            $('h4#judul_user').text('Edit User');
            $('#form-password').hide();
        }
      });
});

$('.btn-reset').click(function(){
    reset_form();
})

function reset_form()
{
    $('form#form_user')[0].reset();
    $('input[name=user_id]').removeAttr('value');
    $('h4#judul_user').text('Tambah User');
    $('#form-password').show();
}

function tabel_user()
{
    $.ajax({
        url: base_url + '/admin/user/get_all',
        success: function(data) {
            
            var html='';
            var data=$.parseJSON(data);

            $.each(data, function(index){
                var id       = data[index].user_id;
                var foto     = data[index].user_foto;
                var username = data[index].user_username;
                var fullname = data[index].user_fullname;
               

                html +=   '<tr>'+
                          '<td>'+(index+1)+'</td>'+
                          '<td>'+'<img src="'+base_url+'/foto/'+foto+'"> '+'</td>'+
                          '<td>'+username+'</td>'+
                          '<td>'+fullname+'</td>'+
                          '<td>'+
                          '<button type="button" class="btn btn-dark btn-fw btn-xs btn-edit" data-id="'+id+'"><i class="fa fa-pencil"></i>Edit</button>&nbsp;&nbsp;'+
                          '<button type="button" class="btn btn-danger btn-fw btn-xs btn-delete" data-id="'+id+'"><i class=" fa fa-trash-o"></i>Hapus</button>'+
                          '</td>' +
                          '</tr>';
            });

            $('#tbody_user').html(html);
        }
    });
}


/************************ VALIDASI PASSWORD ************************/
var password          = document.getElementById("password");
var confirm_password  = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password tidak sama");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange        = validatePassword;
confirm_password.onkeyup = validatePassword;