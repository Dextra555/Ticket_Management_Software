var save_techstatus = '../admin/save_techstatus_details';
var clicked_techstatus_delete_action = '../admin/clicked_techstatus_delete_action';
//var view_device_details = '../admin/clicked_view_edit_device_details';
//var update_device_details = '../admin/clicked_device_details_updations';
var check_techstatus = '../admin/check_techstatus';

$("input[name=status]").keyup(function() {
    var regex = /^[0-9a-zA-Z\-\s]+$/;
    var status = this.value;
    if (!regex.test(status)) {
        this.value = "";
    }
});

$("input[name=status]").change(function() {
    var techstatus= $('input[name=status]').val();
    var fd = new FormData();
    fd.append('status', techstatus);
    $.ajax({
        url: check_techstatus,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            var available_check = obj.length;
            if (available_check > 0) {
                alert('status already exists!');
                $('input[name=status]').val('');
                $('input[name=status]').focus();
            } else {}
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('#save_techstatus').click(function() {
    var status = $("input[name=status]").val();
   // var dept_id = $('input[name=id]').val();
   // var status = $('select[name=status]').val();

    if (status == '') {
        alert('Enter status Name!');
        $('input[name=status]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
            status: status,
            //id: id,
           // status: status,
        };
        var fd = new FormData();
        fd.append('status', data.status);
        //fd.append('dept_id', data.dept_id);
        //fd.append('status', data.status);

        $.ajax({
            url: save_techstatus,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New Status Created Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-techstatus').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});

$('body').delegate('.techstatus_delete', 'click', function(e) {
    var result = confirm("Are you sure you want to delete?");
    if (result) {
        var get_clicked_id_value = $(this).data("id");
        $.LoadingOverlay("show");
        var data = {
            get_clicked_id_value: get_clicked_id_value
        };
        var fd = new FormData();
        fd.append('get_clicked_id_value', data.get_clicked_id_value);

        $.ajax({
            url: clicked_techstatus_delete_action,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                $('a[data-id=' + get_clicked_id_value + ']').parent().parent().hide();
                $.LoadingOverlay("hide");
                swal({
                    title: "Status Deleted Successfully!",
                    icon: "error",
                    button: "Ok!",
                });
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});