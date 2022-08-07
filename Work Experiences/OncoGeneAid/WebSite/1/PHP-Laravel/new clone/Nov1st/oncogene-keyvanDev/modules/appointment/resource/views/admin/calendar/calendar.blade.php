<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app_url" content="{{ url(('/')) }}">
    <link rel='stylesheet' href='{{asset('modules/appointment/fullcalendar/lib/main.min.css')}}'/>
    <link href="{{ asset('themes/AdminPanel/style.css?id=fcfvhgb') }}" rel="stylesheet"/>
</head>
<body>

<div id="app">
    <div style="margin: 0 auto;padding: 10px 20px" id='calendar'></div>
</div>


<script src='{{asset('modules/appointment/moment.min.js')}}'></script>
<script src='{{asset('modules/appointment/fullcalendar/lib/main.min.js')}}'></script>
<script src='{{asset('modules/appointment/fullcalendar/lib/locales/fa.js')}}'></script>
<script>
    var SITEURL = "{{ url('/') }}";
    events = {!! json_encode($events) !!};
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 'auto',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            slotMinTime: '09:00',
            slotMaxTime: '15:00',
            navLinks: true,
            editable: true,
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true,
            draggable: true,
            events: events,
            locale: 'fa',
            timeZone: 'Asia/Tehran',
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectHelper: true,

            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + "/fullcalenderAjax",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        type: "POST",
                        success: function (data) {
                            displayMessage("Event Created Successfully");
                            calendar.fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                }, true);
                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function (event, delta) {

                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITEURL + '/fullcalenderAjax',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update'
                    },
                    type: "POST",
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event Deleted Successfully");
                        }
                    });
                }
            }
        });
        calendar.render();
    });
</script>
</body>
</html>
