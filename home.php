 <!-- Header-->
 <header class="m-0 vh-100 row justify-content-center aling-items-center" id="main-header">
    <div class="col-auto p-5 text-center">
        <div class="text-center text-white">
            <h1 class="display-8 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0">
                <br>
                <button class="btn btn-lg btn-primary" type="button" id="create_appointment">AGENDAR CITA</button>
            </p>
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        
    <?php include('about.html') ?>
        
    </div>
</section>
<script>
    $(function(){
        $('#create_appointment').click(function(){
			uni_modal("Formulario de Citas","admin/appointments/manage_appointment.php",'mid-large')
		})
    })
</script>