@php
  $days = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];

  // Get all orders
  $args = array(
  'limit' => 9999,
  'return' => 'ids',
  'date_completed' => '2018-10-01...2020-10-10',
  'status' => 'completed'
  );
  $query = new WC_Order_Query( $args );
  $orders = $query->get_orders();

  // format data what only needs
  $_ordres = [];

  foreach( $orders as $order_id ) {
  
    $_order = wc_get_order( $order_id );
    $_items = $_order->get_items();

    foreach ($_items as $_item ) {
      $name = $_item->get_name();
    }

    $from = get_field('from',  $order_id);
    $to = get_field('to',  $order_id);

    $order = array(
      'from' => $from,
      'to' => $to,
      'item' => $name
    );

    array_push($_ordres, $order);
  }

  $_ordres_json = json_encode($_ordres);
@endphp

<script>
  const orders = @php echo $_ordres_json @endphp;
  
  console.log('orders: ', orders);
</script>

<div class="calendar" data-calendar>
  <nav class="calendar__nav">
    <span class="calendar__label" data-calendar-month>
    </span>
    <button data-calendar-change-month="prev"><</button>
    <button data-calendar-change-month="next">></button>
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
          <div class="calendar__places">
            @for ($j = 1; $j < 7; $j++)
              <span class="calendar__place" data-calendar-place="{{ $j }}">
                {{ $j }}
              </span>    
            @endfor
          </div>
        </div>

      @if ( $i == 6 || $i > 6 && $i % 7 == 6)
      </div>
      @endif

      @endfor
  </div>
</div>

@dump($_ordres)


    
