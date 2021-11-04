<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
  
  
  <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'trLocale',
      });
      calendar.render();
    });

  </script>
</head>
<body>

  <div class="container">	
    <div id='calendar'></div>
  </div>

  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/tr.min.js"></script>
</body>
</html>