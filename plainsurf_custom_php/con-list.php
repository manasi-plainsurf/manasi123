<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:/index.php", 301);
}
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <?php include_once './includes/global_css.php'; ?>
    <body>

        <!-- header -->
        <header>
            <?php include_once './includes/hea.php'; ?>
        </header>
        <!-- //header -->
        <!-- inner banner -->
        <?php include_once './includes/inner_banner.php'; ?>
        <!-- inner banner -->

        <!-- breadcrumbs -->
        <?php include_once './includes/breadcrumbs.php'; ?>	
        <!-- //breadcrumbs -->




        <!-- contact-->
        <?php include_once './contact_list/cont_list.php'; ?> 



        <!-- footer -->	
        <footer>
            <?php include_once './includes/footer.php'; ?>
        </footer>
        <!-- footer -->
        <!-- Login modal -->
        <?php include_once './includes/login.php'; ?>
        <!-- //Login modal -->

        <!-- Register modal -->
        <?php include_once './includes/register.php'; ?>
        <!-- //Register modal -->

        <!-- Gloabl JS Start -->
        <?php include_once './includes/global_js.php'; ?>	
        <!-- Gloabl JS End -->
    </body>


    <script type="text/javascript">
        $(".remove").click(function () {
            var id = $(this).parents("tr").attr("id");


            if (confirm('Are you sure to remove this record ?'))
            {
                $.ajax({
                    url: 'delete.php',
                    type: 'GET',
                    data: {id: id},
                    error: function () {
                        alert('Something is wrong');
                    },
                    success: function (data) {
                        $("#" + id).remove();
                        alert("Record removed successfully");
                    }
                });
            }
        });


    </script>
</html>

