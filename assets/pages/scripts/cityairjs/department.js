var save_department = '../admin/save_department_details';
var clicked_department_delete_action = '../admin/clicked_department_delete_action';
var view_department_details = '../admin/clicked_view_edit_department_details';
var update_department_details = '../admin/clicked_department_details_updations';
var check_department = '../admin/check_department';

$("input[name=dept_name]").keyup(function() {
    var regex = /^[0-9a-zA-Z\-\s]+$/;
    var dept_name = this.value;
    if (!regex.test(dept_name)) {
        this.value = "";
    }
});

$("input[name=dept_name]").change(function() {
    var department = $('input[name=dept_name]').val();
    var fd = new FormData();
    fd.append('dept_name', department);
    $.ajax({
        url: check_department,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            var available_check = obj.length;
            if (available_check > 0) {
                alert('Department already exists!');
                $('input[name=dept_name]').val('');
                $('input[name=dept_name]').focus();
            } else {}
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('#save_department').click(function() {
    var dept_name = $("input[name=dept_name]").val();
    var dept_id = $('input[name=dept_id]').val();
    var status = $('select[name=status]').val();

    if (dept_name == '') {
        alert('Enter department Name!');
        $('input[name=dept_name]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
            dept_name: dept_name,
            dept_id: dept_id,
            status: status,
        };
        var fd = new FormData();
        fd.append('dept_name', data.dept_name);
        fd.append('dept_id', data.dept_id);
        fd.append('status', data.status);

        $.ajax({
            url: save_department,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New department Created Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-department').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});

$('body').delegate('.department_delete', 'click', function(e) {
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
            url: clicked_department_delete_action,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                $('a[data-id=' + get_clicked_id_value + ']').parent().parent().hide();
                $.LoadingOverlay("hide");
                swal({
                    title: "Department Deleted Successfully!",
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

$('body').delegate('.view_department_details', 'click', function(e) {
    $.LoadingOverlay("show");
    var get_clicked_id_value = $(this).data("id");
    var fd = new FormData();
    fd.append('id', get_clicked_id_value);
    $.ajax({
        url: view_department_details,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
			var obj = JSON.parse(res);
            $("input[name=vdept_name]").val(obj[0].dept_name);
			$("input[name=vdept_id]").val(obj[0].dept_id);
			$("select[name=vstatus]").val(obj[0].status);
            $.LoadingOverlay("hide");
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('body').delegate('.edit_department_details', 'click', function(e) {
	var get_clicked_id_value = $(this).data("id");
	$("input[name=edit_dept_id]").val(get_clicked_id_value);

    $.LoadingOverlay("show");
    var get_clicked_id_value = $(this).data("id");
    var fd = new FormData();
    fd.append('id', get_clicked_id_value);
    $.ajax({
        url: view_department_details,
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function(res) {
            console.log(res);
			var obj = JSON.parse(res);
            $("input[name=edept_name]").val(obj[0].dept_name);
			$("input[name=edept_id]").val(obj[0].dept_id);
			$("select[name=estatus]").val(obj[0].status);
            $.LoadingOverlay("hide");
        },
        error: function(err, ex) {
            alert('Unable to save details! Please try again later.');
            console.log(err.responseText, ex.message);
        }
    });
});

$('#update_department_details').click(function() {
	var edit_dept_id = $("input[name=edit_dept_id]").val();
    var dept_name = $("input[name=edept_name]").val();
    var dept_id = $('input[name=edept_id]').val();
    var status = $('select[name=estatus]').val();

    if (dept_name == '') {
        alert('Enter department Name!');
        $('input[name=edept_name]').focus();
    } else {
        $.LoadingOverlay("show");
        var data = {
			edit_dept_id: edit_dept_id,
            dept_name: dept_name,
            dept_id: dept_id,
            status: status,
        };
        var fd = new FormData();
		fd.append('edit_dept_id', data.edit_dept_id);
        fd.append('dept_name', data.dept_name);
        fd.append('dept_id', data.dept_id);
        fd.append('status', data.status);

        $.ajax({
            url: update_department_details,
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                $.LoadingOverlay("hide");
                swal({
                    title: "New department Updated Successfully!",
                    icon: "success",
                    button: "Ok!",
                });
                $('#new-department').modal('hide');
                window.location.reload(true);
            },
            error: function(err, ex) {
                alert('Unable to save details! Please try again later.');
                console.log(err.responseText, ex.message);
            }
        });
    }
});