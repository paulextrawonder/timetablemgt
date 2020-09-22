<?php
    if (isset($_SESSION['status']) && ($_SESSION['status'] !="")){
      ?>
           <script>
           Swal.fire({
            type: "<?php echo $_SESSION['status']; ?>",
            title: "<?php echo $_SESSION['status']; ?>",
            text: "<?php echo $_SESSION['message']; ?>",
            icon: "<?php echo $_SESSION['status']; ?>",
            dangerMode: true,
            timer:1000,
            button: "OK",
            allowOutsideClick: true
            });

           </script>
      <?php
      unset($_SESSION['status']);
    }
    ?>