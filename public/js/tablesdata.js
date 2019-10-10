// $.noConflict();
// $.noConflict(true);
$(document).ready(function() {
    //alert('test');
    let table = document.getElementById('players-table').DataTable();
    console.log(table);
    $('#search').on( 'keyup', function () {
        table.search( this.value ).draw();
    } );
} );