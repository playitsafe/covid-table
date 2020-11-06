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
  $('#covid-table').DataTable({
    dom: 'Bfrtip',
    columnDefs: [
      {
        targets: 1,
        className: 'noVis'
      }
    ],
    buttons: [
      {
        extend: 'colvis',
        columns: ':not(.noVis)'
      }
    ]
  });
});
