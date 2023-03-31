
<script src="<?= base_url('assets/bootstrap-5.0.2-dist/js/bootstrap.min.js'); ?>"></script>


<?php
    if(isset($js_custom)){
        foreach($js_custom as $item){ ?>
            <script src="<?= base_url('assets/'. $item); ?>"></script>
        <?php }
    }
    
?>
    </body>
</html>