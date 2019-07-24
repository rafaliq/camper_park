@php
    $days = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
@endphp

<div class="calendar" data-calendar>
  <nav class="calendar__nav">
    <span class="calendar__label" data-calendar-month>
    </span>
    <button><</button>
    <button>></button>
  </nav>
  <header class="calendar__header">
    @foreach ( $days as $day )
    <div class="calendar__cell calendar__cell--header">
      {{ $day }}
    </div>
    @endforeach
  </header>
  <div class="calendar__body" data-calendar-body>

      @for ($i = 0; $i < 42; $i++)

      @if ($i == 0 || $i > 6 && $i % 7 == 0 )
      <div class="calendar__row">
      @endif

        <div class="calendar__cell" data-calendar-cell>
          <span data-calendar-cell-label></span>
        </div>

      @if ( $i == 6 || $i > 6 && $i % 7 == 6)
      </div>
      @endif

      @endfor
  </div>
</div>


    
