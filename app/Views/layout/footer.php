<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <nav class="pull-left">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="http://www.themekita.com">
            ThemeKita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Help </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Licenses </a>
        </li>
      </ul>
    </nav>
    <div class="copyright">
      2024, made with <i class="fa fa-heart heart text-danger"></i> by
      <a href="http://www.themekita.com">ThemeKita</a>
    </div>
    <div>
      Distributed by
      <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
    </div>
  </div>
</footer>
</div>

<!-- Custom template | don't include it in your project! -->

<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>template/assets/js/core/jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url(); ?>template/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url(); ?>template/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url(); ?>template/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url(); ?>template/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url(); ?>template/assets/js/plugin/datatables/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $("#basic-datatables").DataTable({});

    $("#multi-filter-select").DataTable({
      pageLength: 5,
      initComplete: function() {
        this.api()
          .columns()
          .every(function() {
            var column = this;
            var select = $(
                '<select class="form-select"><option value=""></option></select>'
              )
              .appendTo($(column.footer()).empty())
              .on("change", function() {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column
                  .search(val ? "^" + val + "$" : "", true, false)
                  .draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function(d, j) {
                select.append(
                  '<option value="' + d + '">' + d + "</option>"
                );
              });
          });
      },
    });

    // Add Row
    $("#add-row").DataTable({
      pageLength: 5,
    });

    var action =
      '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $("#addRowButton").click(function() {
      $("#add-row")
        .dataTable()
        .fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action,
        ]);
      $("#addRowModal").modal("hide");
    });
  });
</script>
<!-- Bootstrap Notify -->
<script src="<?= base_url(); ?>template/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url(); ?>template/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/plugin/jsvectormap/world.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url(); ?>template/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    <?php if (session()->getFlashdata('success')): ?>
      Swal.fire({
        title: 'Berhasil!',
        text: '<?= session()->getFlashdata('success') ?>',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
      const errors = <?= json_encode(session()->getFlashdata('errors')) ?>;
      let errorMessage = '';
      for (const key in errors) {
        if (errors.hasOwnProperty(key)) {
          errorMessage += errors[key] + '\n';
        }
      }
      Swal.fire({
        title: 'Terjadi Kesalahan!',
        text: errorMessage,
        icon: 'error',
        confirmButtonText: 'OK'
      });
    <?php endif; ?>
  });
</script>



<script>
  $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#177dff",
    fillColor: "rgba(23, 125, 255, 0.14)",
  });

  $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#f3545d",
    fillColor: "rgba(243, 84, 93, .14)",
  });

  $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#ffa534",
    fillColor: "rgba(255, 165, 52, .14)",
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Event listener untuk tombol hapus
    document.querySelectorAll('.btn-delete').forEach(function(button) {
      button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        Swal.fire({
          title: 'Apakah Anda yakin?',
          text: "Data yang dihapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            // Redirect ke controller untuk menghapus data
            window.location.href = `/kategori/delete/${id}`;
          }
        });
      });
    });
  });
</script>
</body>

</html>