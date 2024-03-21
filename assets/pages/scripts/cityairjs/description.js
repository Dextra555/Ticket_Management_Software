var save_description = '../admin/save_description_details';
var clicked_description_delete_action = '../admin/clicked_description_delete_action';
//var view_device_details = '../admin/clicked_view_edit_device_details';
//var update_device_details = '../admin/clicked_device_details_updations';
var check_description = '../admin/check_description';

$("input[name=issue_name]").keyup(function() {
    var regex = /^[0-9a-zA-Z\-\s]+$/;
    var issue_name = this.value;
    if (!regex.test(issue_name)) {
        this.value = "";
    }
});

$("input[name=issue_name]").change(function() {
    var description= $('input[name=issue_name]').val();
    var fd = new FormData();
    fd.append('issue_name', description);
    $.ajax({
        url: check_description,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            var available_check = obj.length;
            if (available_check > 0) {
                alert('issue description already exists!');
                $('input[name=issue_name]').val('');
                $('input[name=issue_name]').focus();
            } else {}
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('#save_description').click(function() {
    var issue_name = $("input[name=issue_name]").val();
   // var dept_id = $('input[name=id]').val();
   // var status = $('select[name=status]').val();

    if (issue_name == '') {
        alert('Enter issue description Name!');
        $('input[name=issue_name]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
            issue_name: issue_name,
            //id: id,
           // status: status,
        };
        var fd = new FormData();
        fd.append('issue_name', data.issue_name);
        //fd.append('dept_id', data.dept_id);
        //fd.append('status', data.status);

        $.ajax({
            url: save_description,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New description isssue Created Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-description').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});

$('body').delegate('.description_delete', 'click', function(e) {
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
            url: clicked_description_delete_action,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                $('a[data-id=' + get_clicked_id_value + ']').parent().parent().hide();
                $.LoadingOverlay("hide");
                swal({
                    title: " issue description Deleted Successfully!",
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



