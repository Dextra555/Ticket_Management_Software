var get_appointments = '../appointment/get_appointments';
    add_calendar_event = '../appointment/add_calendar_event';
	get_app_details = '../appointment/get_calander_view_appointment_details';

var AppCalendar = function() {

    return {
        //main function to initiate the module
        init: function() {
            this.initCalendar();
        },

        initCalendar: function() {

            if (!jQuery().fullCalendar) {
                return;
            }

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var h = {};
            var full_calendar = $('#calendar');
            
            console.log(full_calendar)
            if (App.isRTL()) {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        right: 'title, prev, next',
                        center: '',
                        left: 'agendaDay, agendaWeek, month, today'
						};
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        right: 'title',
                        center: '',
                        left: 'agendaDay, agendaWeek, month, today, prev, next'
                    };
                }
            } else {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        left: 'title, prev, next',
                        center: '',
                        right: 'today,month,agendaWeek,agendaDay'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,agendaWeek,agendaDay'
                    };
                }
            }
            
            var initDrag = function(el) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim(el.text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                el.data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                el.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            };

            var addEvent = function(title,id) {
				/*if (id != undefined && id.length > 0) {
                    var html = $('<div id="' + id + '" data-name="' + title + '" data-id="' + id + '" class="external-event label label-default pop">' + title + '</div>');
                    jQuery('#event_box').append(html);
                    initDrag(html);
                    return;
				}*/
				/* $async.post({
                    url: add_new_event,
                    data: 
					{
                        event_name: title
                    },
                    success: function(res) {
                        //alert(res.id);
                        //alert(res.event_name);
                        var html = $('<div id="' + res.id + '" data-name="' + res.event_name + '" data-id="' + res.id + '" class="external-event label label-default pop">' + res.event_name + '</div>');
                        jQuery('#event_box').append(html);
                        initDrag(html);
                    }
                }); */
				
            };

            $('#external-events div.external-event').each(function() {
                initDrag($(this));
            });

            $('#event_add').unbind('click').click(function() {
                var title = $('#event_title').val();
                if (title.length)
                    addEvent(title);
                else
					$('.new_event.error').removeClass('hidden');
               
            });

            //predefined events
            $('#event_box').html("");
			
          
            // fc-event-container

			$.ajax({
                url: get_appointments,
                success: function(res) {
                     console.log(res);
					 var obj = JSON.parse(res);
					 $(obj.events).each(function(i, ele) {
                        addEvent(ele.appointment_name, ele.id);
                    });
                    if ($.type(obj.events1) != "array") 
					{
                        obj.events1 = [];
                    }
            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ //re-initialize the calendar
                        header: {
                            left: 'title',
                            center: '',
                            right: 'prev,today,next month,agendaWeek,agendaDay'
								},
                        slotMinutes: 15,
                        selectable: true,
                        droppable: true,
                        selectHelper: true,
                        select: function(start, end, allDay) {
                           
                            var check = moment(start).format('YYYY-MM-DD');
                            var today = moment(new Date()).format('YYYY-MM-DD');
                            if (check < today)  
							{
                                alert('Please set the event after the current date!')
                            } 
							else 
							{
                                
                                bootbox.prompt("Appointment Name", function(result) {
								var clicked_date = moment(start).format('YYYY-MM-DD');
                                    if (result != null && result != "") {
										var data = 
												{
													appointment_name: result,
													appointment_date: clicked_date
													  
												};
									   var fd = new FormData();
										   fd.append('appointment_name', data.appointment_name);
										   fd.append('appointment_date', data.appointment_date);
                                        
										$.ajax({
                                            url: add_calendar_event,
											type:'POST',
                                            data: fd,
											contentType: false,
											processData: false,
                                            success: function(obj) 
											 {
                                                console.log(obj);
												 var res = JSON.parse(obj);
												for (var i=0; i<res.length; i++)
												 {
													 full_calendar.fullCalendar('renderEvent', {
                                                        title: res[i].appointment_name,
                                                        id: res[i].id,
                                                        start: res[i].appointment_date,
                                                        end: res[i].appointment_date
                                                    }, true);

												 }
                                            }
                                        });
                                        dragablaeElementSet();
                                    }
                                    full_calendar.fullCalendar('unselect');
                                });

                            }

                        },
                        /*dayClick: function (date, event, view) {
							bootbox.prompt("Add New Event: Event Name", function(res) {
								console.log(res);
								if(!$.trim(res).length) return;
								$async.post({
									url: add_new_event,
									data: {
										event_name: res
									},
									success: function(res) {
										var d = res.data;
										console.log(res);
										if($.type(d) == "array" && d.length) {
											$('#calendar').fullCalendar("removeEvents");
											$('#calendar').fullCalendar("addEventSource", d);
											$('#calendar').fullCalendar("rerenderEvents");
											//$('#calendar').fullCalendar('renderEvent', d, true);
										} else {

										}
									}
								})
							});
						},*/
                        drop: function(date, allDay) { // this function is called when something is dropped
                            var check = moment(date).format('YYYY-MM-DD');
                            var today = moment(new Date()).format('YYYY-MM-DD');
                            if (check < today) {
                                alert('Please Drop the event after the current date!')
                            } else {
                                var event_d = $(this).data();
                                var param = {};
                                param.event_id = event_d.id;
                                param.event_name = event_d.name;
                                param.event_date = moment(date).format('YYYY-MM-DD');
                                param.remove_from_list = $('#drop-remove').is(':checked');
                                $.ajax({
                                    url: drop_event,
                                    data: param,
                                    success: function(obj) {
                                        // console.log(obj);

                                        var schedule_id = obj.schedule_id;
                                        //var f_event_id = obj.event_id +','+schedule_id;

                                        full_calendar.fullCalendar('renderEvent', {
                                            id: schedule_id,
                                            title: obj.event_name,
                                            start: obj.event_start,
                                            end: obj.event_end
                                        }, true);


                                    }
                                });
                                dragablaeElementSet();
                            }
							 full_calendar.fullCalendar('unselect');
                        },
                        
						events:obj.events1,
						
                        eventClick: function(event, jsEvent, view) {
                             console.log();
                            // var id = event.id;
                             var start = event.start;
                             var title = event.title;
                            //  alert(id)
                           var check = moment(start).format('YYYY-MM-DD');
                           alert(check)
                           alert(title)
                             var data = 
                                        {
                                          // id: id
                                          start: check,
                                          title: title
                                        };  
                                   var fd = new FormData();
                                       // fd.append('id', data.id);
                                       fd.append('start', data.start);
                                       fd.append('title', data.title);
                                       
                                    $.ajax({
                                              url: get_app_details,
                                              type: 'POST',
                                              data: fd,
                                              contentType: false,
                                              processData: false,
                                              success: function(res) 
                                                  {
                                                     console.log(res);
                                                     var obj = JSON.parse(res);
                                                    // alert(obj.length)
                                                    if(obj.length > 0)
                                                    {
                                                        var output = "<table class=''>";
                                                                output += "<tr><th>S.No</th><th>Name</th><th>Contact Number</th><th>Address</th><th>Status</th><th>Remarks</th></tr>";
                                                                for (var i=0; i<obj.length; i++)
                                                                {
                                                                    var app_status = obj[i].app_status;
                                                                    if(app_status == '2')
                                                                    {
                                                                        app_status = 'Scheduled';
                                                                    }
                                                                    else if(app_status == '3')
                                                                    {
                                                                        app_status = 'Assigned';
                                                                    }
                                                                    else if(app_status == '4')
                                                                    {
                                                                        app_status = 'Completed';
                                                                    }
                                                                  output += "<tr><td>"+(i+1)+"</td><td>"+obj[i].name+"</td><td>"+obj[i].contact_number+"</td><td>"+obj[i].address+"</td><td>"+app_status+"</td><td>"+obj[i].scheduled_remarks+"</td></tr>";
                                                                }
                                                               output += "</table>";
                                                       $.prompt("<strong>Date:</strong>"+check+"<br/> <strong>Time:</strong> "+title+"<br/> <hr> "+output, {
                                                            title: "Appointment",
                                                            buttons: { "Ok": true }
                                                        });

                                                     /*  $.prompt("<strong>Date:</strong>"+obj[i].scheduled_date+"<br/> <strong>Time:</strong> "+obj[i].scheduled_time+"<br/> <hr> <strong>Name: </strong> "+obj[i].name+" <br/> <strong> Phone Number:</strong> "+obj[i].contact_number+" <br/><strong> Address:</strong> "+obj[i].address+" <br/><strong> Remarks:</strong> "+obj[i].scheduled_remarks+" <br/><strong>Status:</strong> "+app_status+"", {
                                                            title: "Appointment",
                                                            buttons: { "Ok": true }
                                                        });*/
                                                    }
                                                                  

                                                  },
                                      error: function(err, ex) 
                                            {
                                                alert('Unable to Save details! Please try again later.');
                                                console.log(err.responseText, ex.message);
                                            }
                                       });

                            // window.location = event_info_page + '?id=' + event.id + '&title=' + event.title;
                        },
                        eventAfterAllRender: function() {}
                    });
			   }
            });
        }
	};
	
	function dragablaeElementSet() {
        'use strict';

        $('#external-events div.external-event').each(function() {
            var d = $(this).data();
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim(d.name), // use the element's text as the event title
                id: $.trim(d.id) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0, //  original position after the drag
                start: startDraging,
                stop: stopDraging
            });
        });
    }

    function startDraging() {
        'use strict';
        $('#trash').addClass('active');
    }

    function stopDraging() {
        'use strict';
        $('#trash').removeClass('active');
    }

}();

jQuery(document).ready(function() {    
   AppCalendar.init(); 
});