</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Salary : <span class="salary"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="./../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./../node_modules/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="./../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
new WOW().init();
</script>

<script>
$('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
});

$(document).ready( function () {
    $('.showInfo').click(function(){
        //var parent = $(this).parent().parent();
        var parent = $(this).closest('tr');
        $('.modal-body .salary').text(parent.children()[5].textContent);
    });
    $('.datatable').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json'
        }
    });

    $('.deleteRow').click(function(){
        let db = $(this);
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.value) {
            db.closest('tr').remove();
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
    });
} );

</script>
</body>
</html>
