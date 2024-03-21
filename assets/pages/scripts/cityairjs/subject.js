var save_subject = '../admin/save_subject_details';
var clicked_subject_delete_action = '../admin/clicked_subject_delete_action';
//var view_device_details = '../admin/clicked_view_edit_device_details';
//var update_device_details = '../admin/clicked_device_details_updations';
var check_subject = '../admin/check_subject';

$("input[name=subject_issue]").keyup(function() {
    var regex = /^[0-9a-zA-Z\-\s]+$/;
    var subject_issue = this.value;
    if (!regex.test(subject_issue)) {
        this.value = "";
    }
});

$("input[name=subject_issue]").change(function() {
    var subject = $('input[name=subject_issue]').val();
    var fd = new FormData();
    fd.append('subject_issue', subject);
    $.ajax({
        url: check_subject,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            var available_check = obj.length;
            if (available_check > 0) {
                alert('issue subject already exists!');
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

$('#save_subject').click(function() {
    var subject_issue = $("input[name=subject_issue]").val();
   // var dept_id = $('input[name=id]').val();
   // var status = $('select[name=status]').val();

    if (subject_issue == '') {
        alert('Enter subject issue Name!');
        $('input[name=subject_issue]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
            subject_issue: subject_issue,
           // id: id,
           // status: status,
        };
        var fd = new FormData();
        fd.append('subject_issue', data.subject_issue);
        //fd.append('dept_id', data.dept_id);
        //fd.append('status', data.status);

        $.ajax({
            url: save_subject,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New subject issue Created Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-subject').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});

$('body').delegate('.subject_delete', 'click', function(e) {
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
            url: clicked_subject_delete_action,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                $('a[data-id=' + get_clicked_id_value + ']').parent().parent().hide();
                $.LoadingOverlay("hide");
                swal({
                    title: "subject issue Deleted Successfully!",
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



