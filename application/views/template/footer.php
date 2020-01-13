<!-- Footer -->
<footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
            <div class="copyright">
                &copy; 2020 <a href="#" class="nama-web" style="font-size:22px;">filmin </a> by <a href="https://alghvzali.github.io" target="_blank">Al-Ghazali</a>
            </div>
        </div>
        <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <!-- <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li> -->
                <li class="nav-item">
                    <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div>
</div>
<!--   Core   -->
<script src="<?php echo base_url('assets/js/plugins/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<!--   Optional JS   -->
<script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/chart.js/dist/Chart.extension.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

<!--   Argon JS   -->
<script src="<?php echo base_url('assets/js/argon-dashboard.min.js?v=1.1.0'); ?>"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
</script>

<script>
    $(document).ready(function() { // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function() { // Ketika user memilih filter
            if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            } else { // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
</script>
</body>

</html>