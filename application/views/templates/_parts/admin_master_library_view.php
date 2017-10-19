<meta charset="utf-8">
<title>ADMIN CONTROL PANEL</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo public_helper('lib/bootstrap/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('lib/font-awesome/css/font-awesome.min.css'); ?>"/>
    <link href="<?php echo public_helper('lib/datetime-picker/datetimepicker.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo public_helper('lib/jquery/jquery-ui.min.css')?>" />

    <script type="text/javascript" src="<?php echo public_helper("lib/jquery/jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo public_helper('lib/bootstrap/js')?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo public_helper('ckeditor/ckeditor.js')?>"></script>
    <script type="text/javascript" src="<?php echo public_helper('js/admin.js')?>"></script>
    <link href="<?php echo public_helper('bootstrap-dialog/bootstrap-dialog.min.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo public_helper('lib/jquery/jquery-ui.min.js')?>"></script> 
    <script src="<?php echo public_helper('bootstrap-dialog/bootstrap-dialog.min.js') ?>"></script>
    <script src="<?php echo public_helper('js/moment-with-locales.js') ?>" ></script>
    <script src="<?php echo public_helper('lib/datetime-picker/datetimepicker.js')?>"></script>

    <link rel="stylesheet" href="<?php echo public_helper('css/admin.css'); ?>" type="text/css" />
    <!-- fullcander -->


  <script>
  var base_url = '<?php echo base_url(); ?>';
  var public_url = '<?php echo public_helper(); ?>';
  </script>
  <script type="text/javascript">
    $(function() {
        $(".date").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy'
        });
    });
</script>