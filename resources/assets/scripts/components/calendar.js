const CONFIG = {
  ELEMENTS: {
    BODY: 'data-calendar-body',
    MONTH: 'data-calendar-month',
    CELL: 'data-calendar-cell',
    CELL_LABEL: 'data-calendar-cell-label',
    CHANGE_MONTH: 'data-calendar-change-month',
  },
  MONTHS: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'],
  DAYS: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
};

const calendar = {
  init() {
    const { ELEMENTS, MONTHS, DAYS } = CONFIG;

    // label elements
    this.body = document.querySelector(`[${ELEMENTS.BODY}]`);
    this.monthLabel = document.querySelector(`[${ELEMENTS.MONTH}]`);
    this.cell = document.querySelectorAll(`[${ELEMENTS.CELL}]`);
    this.monthChange = document.querySelectorAll(`[${ELEMENTS.CHANGE_MONTH}]`);

    // store date objects
    this.currentDate = new Date();
    this.currentMonth;

    // label data
    this.cellSelector = ELEMENTS.CELL_LABEL;
    this.months = MONTHS;
    this.days = DAYS;

    // function execution
    this.createMonth();
    this.addEvents();

    // log data
    console.log(this.currentDate);
    
  },

  addEvents() {
    for (const elem of this.monthChange) {
      elem.addEventListener('click', event => {
        // label data
        const direction = event.currentTarget.dataset.calendarChangeMonth;

        // Set new month
        if(direction === 'next') {
          this.currentDate.setMonth(this.currentDate.getMonth() + 1);
        }

        else {
          this.currentDate.setMonth(this.currentDate.getMonth() - 1);
        }

        this.createMonth();
      
        console.log('thisMonth', this.currentDate);
      })
    }
  },

  createMonth(date = this.currentDate) {
    // label data
    const myData = {};

    // set value for labels
    myData.year = date.getFullYear();
    myData.month = date.getMonth();
    myData.day = date.getDate();
    myData.endpoints = this.monthEndpoints(myData);

    // function execution
    this.changeDate(myData.month, myData.year);
    this.fillDays(myData.endpoints.first, myData.endpoints.last);

    // output in console
    console.log(myData)
  },

  changeDate(month, year) {
    // set current month as object param
    this.currentMonth = month;

    // change current month text
    this.monthLabel.innerText = `${this.months[month]} ${year}`;
  },

  monthEndpoints(date) {
    // label data
    const monthEndpoints = {};
    let firstDayName;

    // set value for labels
    firstDayName = this.days[new Date(date.year, date.month, 1).getDay()];
    monthEndpoints.first = this.days.indexOf(firstDayName);
    monthEndpoints.last = new Date(date.year, date.month + 1, 0).getDate();

    // return
    return monthEndpoints;
  },

  fillDays(start, end) {
    // label data
    let day = end;

    this.cell.forEach((elem, index) => {
      // label data
      const label = elem.querySelector(`[${this.cellSelector}]`);

      // modify value
      if(index == start) day = 0;
      

      if(index >= start && index < end + start) {
        elem.classList.add('calendar__cell--month');
      }

      else {
        elem.classList.remove('calendar__cell--month');
      }

      day++;
      label.innerText = day < 10 ? `0${day}` : day;

      if(day == end) day = 0;

      
      // output in console
      // console.log('elem:', elem);
    })
  },
};

export default calendar;
