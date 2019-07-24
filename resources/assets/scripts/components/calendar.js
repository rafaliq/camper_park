const CONFIG = {
  ELEMENTS: {
    BODY: 'data-calendar-body',
    MONTH: 'data-calendar-month',
    CELL: 'data-calendar-cell',
    CELL_LABEL: 'data-calendar-cell-label',
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

    // store date objects
    this.currentDate = new Date();

    // label data
    this.cellSelector = ELEMENTS.CELL_LABEL;
    this.months = MONTHS;
    this.days = DAYS;

    // function execution
    this.createMonth();
  },

  createMonth(date = this.currentDate) {
    // label data
    const myData = {};

    // set value for labels
    myData.year = date.getFullYear();
    myData.month = date.getMonth();
    myData.day = date.getDate();
    myData.endpoints = this.monthEndpoints(myData);
    myData.start = this.days.indexOf(myData.endpoints.first);

    // function execution
    this.changeMonth(myData.month);
    this.fillDays(myData.endpoints.first, myData.endpoints.last);

    // output in console
    console.log(myData)
  },

  changeMonth(month) {
    this.monthLabel.innerText = this.months[month - 1];
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
    let day = 28;

    this.cell.forEach((elem, index) => {
      // label data
      const label = elem.querySelector(`[${this.cellSelector}]`);

      // modify value
      if(index == start) day = 0;
      if(day == end) day = 0;

      if(index > start && index <= end) {
        elem.classList.add('calendar__cell--month');
      }

      day++;
      label.innerText = day < 10 ? `0${day}` : day;

      
      // output in console
      // console.log('elem:', elem);
    })
  },
};

export default calendar;
