var save_device = '../admin/save_device_details';
var clicked_device_delete_action = '../admin/clicked_device_delete_action';
//var view_device_details = '../admin/clicked_view_edit_device_details';
//var update_device_details = '../admin/clicked_device_details_updations';
var check_device = '../admin/check_device';

$("input[name=device_name]").keyup(function() {
    var regex = /^[0-9a-zA-Z\-\s]+$/;
    var device_name = this.value;
    if (!regex.test(device_name)) {
        this.value = "";
    }
});

$("input[name=device_name]").change(function() {
    var device = $('input[name=device_name]').val();
    var fd = new FormData();
    fd.append('device_name', device);
    $.ajax({
        url: check_device,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            var available_check = obj.length;
            if (available_check > 0) {
                alert('device already exists!');
                $('input[name=device_name]').val('');
                $('input[name=device_name]').focus();
            } else {}
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('#save_device').click(function() {
    var device_name = $("input[name=device_name]").val();
   // var dept_id = $('input[name=id]').val();
   // var status = $('select[name=status]').val();

    if (device_name == '') {
        alert('Enter device Name!');
        $('input[name=device_name]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
            device_name: device_name,
           // id: id,
           // status: status,
        };
        var fd = new FormData();
        fd.append('device_name', data.device_name);
        //fd.append('dept_id', data.dept_id);
        //fd.append('status', data.status);

        $.ajax({
            url: save_device,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New device Created Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-device').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});

$('body').delegate('.device_delete', 'click', function(e) {
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
            url: clicked_device_delete_action,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                $('a[data-id=' + get_clicked_id_value + ']').parent().parent().hide();
                $.LoadingOverlay("hide");
                swal({
                    title: "device Deleted Successfully!",
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



