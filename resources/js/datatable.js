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
  // console.log(table.column(1).data().filter(function(val, i) {
  //   console.log(val);
  // }));
});
