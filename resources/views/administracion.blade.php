@extends('aside.principal')
<script>
    var url = "{{ route('cita.ver') }}";

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'es',
          headerToolbar: {
          left:'prev, next, today',
          center: 'title',
          right: 'dayGridMonth, timeGridWeek, listWeek'
          },

          events: url
        });
        calendar.render();
      });

    </script>
@section('content')
<div class="container">
 <div id='calendar'></div>
 </div>
@endsection