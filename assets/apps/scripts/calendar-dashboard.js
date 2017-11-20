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
			
			if (App.isRTL()) {
				if ($('#calendar-dashboard').parents(".portlet").width() <= 720) {
					$('#calendar-dashboard').addClass("mobile");
					h = {
						right: 'title, prev, next',
						center: '',
						left: 'agendaDay, agendaWeek, month'
					};
				} else {
					$('#calendar-dashboard').removeClass("mobile");
					h = {
						right: 'title',
						center: '',
						left: 'agendaDay, agendaWeek, month, prev,next'
					};
				}
			} else {
				if ($('#calendar-dashboard').parents(".portlet").width() <= 720) {
					$('#calendar-dashboard').addClass("mobile");
					h = {
						left: 'title, prev, next',
						center: '',
						right: 'month,agendaWeek,agendaDay'
					};
				} else {
					$('#calendar-dashboard').removeClass("mobile");
					h = {
						left: 'title',
						center: '',
						right: 'prev,next,month,agendaWeek,agendaDay'
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
			
			var addEvent = function(title) {
				title = title.length === 0 ? "Unnamed Customer" : title;
				var html = $('<div class="external-event label label-default" data-duration="01:00">' + title + '</div>');
				jQuery('#event_box').append(html);
				initDrag(html);
			};
			
			$('#external-events div.external-event').each(function() {
				initDrag($(this));
			});
			
			$('#event_add').unbind('click').click(function() {
				var title = $('#event_title').val();
				addEvent(title);
			});
			
			//predefined events
			$('#event_box').html("");
			
			$('#calendar-dashboard').fullCalendar('destroy'); // destroy the calendar
			$('#calendar-dashboard').fullCalendar({ //re-initialize the calendar
				header: h,
				defaultView: 'month', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/ 
				slotMinutes: 15,
				editable: true,
				droppable: true, // this allows things to be dropped onto the calendar !!!
				drop: function(date, allDay) { // this function is called when something is dropped
					// retrieve the dropped element's stored Event Object
					var originalEventObject = $(this).data('eventObject');
					// we need to copy it, so that multiple events don't have a reference to the same object
					var copiedEventObject = $.extend({}, originalEventObject);
					
					// assign it the date that was reported
					date = new Date(date);
					copiedEventObject.start = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 8, 0);
					copiedEventObject.end = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 9, 0);
					copiedEventObject.allDay = false;
					copiedEventObject.dbId = 3;
					
					// render the event on the calendar
					// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
					$('#calendar-dashboard').fullCalendar('renderEvent', copiedEventObject, true);
					$(this).remove();
				},
				events: [
					// {
						// title: 'All Day Event',
						// start: new Date(2017, 0, 1),
						// backgroundColor: '#69A4E0'
					// },
					// {
						// title: 'Repeating Event',
						// start: new Date(y, m, d - 3, 16, 0),
						// allDay: false,
						// overlap: true,
						// backgroundColor: '#69A4E0'
					// },
					{
						dbId: 1,
						title: 'Repeating Event',
						start: new Date(2017, 9, 17, 16, 30),
						end: new Date(2017, 9, 17, 17, 15),
						allDay: false,
						editable: false,
						backgroundColor: '#4CAF50',
					},
					{
						dbId: 2,
						title: 'Repeating Event',
						start: new Date(2017, 9, 17, 17, 00),
						end: new Date(2017, 9, 17, 18, 30),
						allDay: false,
						editable: false,
						backgroundColor: '#4CAF50',
					},
					// {
						// title: 'Meeting',
						// start: new Date(y, m, d, 10, 30),
						// allDay: false,
						// backgroundColor: '#69A4E0'
					// },
					// {
						// title: 'Lunch',
						// start: new Date(y, m, d, 12, 0),
						// end: new Date(y, m, d, 14, 0),
						// backgroundColor: '#69A4E0',
						// allDay: false,
					// },
					// {
						// title: 'Birthday Party',
						// start: new Date(y, m, d + 1, 19, 0),
						// end: new Date(y, m, d + 1, 22, 30),
						// backgroundColor: '#69A4E0',
						// allDay: false,
					// }
				],
				eventRender: function(event, element) {
					element.attr('data-db-id', event.dbId);
				},
				eventClick: function(calEvent, jsEvent, view) {
					// alert(new Date(2017, 9, 17, 18, 30));
					if(selectMe(calEvent) == "edit"){
						if(calEvent.editable !== undefined && calEvent.editable === false){
							return false;
						}
						else{
							// alert(calEvent.dbId);
							var title = prompt('Customer Name:', calEvent.title, { buttons: { Ok: true, Cancel: false} });
							if (title){
								calEvent.title = title;
								$('#calendar-dashboard').fullCalendar('updateEvent',calEvent);
							}
						}
					}
				},
				eventDblClick: function(calEvent, jsEvent, view) {
					alert();
				},
				eventDrop: function(event, delta, revertFunc) {
					alert(event.title + " was dropped on " + event.start.format());
					// if (!confirm("Are you sure about this change?")) {
						// revertFunc();
					// }
				},
				eventReceive: function(event){
					alert();
				},
				allDaySlot: false,
				timeFormat: 'h(:mm)a',
				height: 700
			});

		}

	};

}();

jQuery(document).ready(function(){
	AppCalendar.init(); 
});

//new Date(year, month, day, hours, minutes, seconds, milliseconds);