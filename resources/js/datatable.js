//var $ = require( 'jquery' );
// var $ = require('jquery');
// var dt = require('datatables.net')();
// import $ from 'jquery';
// import dt from 'datatables.net';

// console.log(typeof $);

// $(document).ready( function () {
//   $('#covid-table').DataTable();
// } );

$.extend( $.fn.dataTable.defaults, {
    searching: true,
    //ordering:  false
} );

$(function() {
  var table = $('#covid-table').DataTable({
    deferLoading:true,
    dom: 'Bfrtip',
    // columnDefs: [
    //   {
    //     targets: 1,
    //     className: 'noVis'
    //   }
    // ],
    // columnDefs: [
    //   {
    //       "targets": [ 0 ],
    //       "visible": false,
    //       "searchable": false
    //   }
    // ],
    buttons: [
      {
        extend: 'colvis',
        columns: ':not(.noVis)'
      }
    ]
  });

  table.column(14).visible(false);
  table.column(14).search(0).draw();

  var btnList = [$('#btn-today'), $('#btn-yesterday'), $('#btn-2days-ago')];

  var activeIndex = 0;

  btnList.forEach(function(el) {
    el.click(function() {
      activeIndex = btnList.indexOf(el);
      table.column(14).search(activeIndex).draw();

      // change color
      for (i = 0; i < btnList.length; i++) {
        if (i === activeIndex) {
          btnList[i].removeClass('btn-light');
          btnList[i].addClass('btn-dark');
        } else {
          btnList[i].removeClass('btn-dark');
          btnList[i].addClass('btn-light');
        }
      }
    });
  });

  // btnList.click(function() {
  //   table.column(14).search("0");
  //   table.draw();
  // });

  // table.column(14).data().filter(function(val, i) {
  //   return val === "1";
  // })
});
