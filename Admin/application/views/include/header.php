<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- jquery link start -->
   <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
       <!-- jquery link end -->
    <!-- Get Bootstrap Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- Get Bootstrap End -->

    <!-- CSS Start -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!-- CSS End -->

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

      <!-- datatable start -->
   
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
  
       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
      <!-- datatable end -->
       <!-- jquery file start     -->
       
       <script type="text/javascript" src="<?php echo base_url()?>assets/js/style.js"></script>
       <script type="text/javascript" src="<?php echo base_url()?>assets/js/myalert.js"></script>
       <!-- jquery file end    -->
       <script>
    $(document).ready(function() {
    $('#table_id').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
     </script>
    <title>Pantryo: Admin</title>
</head>

<body>