import 'fullcalendar';

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // Set the initial view
        events: '/events', // Replace with your event source URL
    });

    calendar.render();
});
