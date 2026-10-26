</div> <!-- /main-content -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Load JS Global -->
<script src="<?= base_url('assets/js/global.js') ?>"></script>
<!-- Load JS Spesifik Halaman -->

<script>
    console.log("Nilai page_js: <?= isset($page_js) ? $page_js : 'KOSONG/UNDEFINED' ?>");
</script>
<?php if (isset($page_js)): ?>
    <script src="<?= base_url('assets/js/' . $page_js . '.js') ?>"></script>
<?php endif; ?>

</body>

</html>