<?php include('./layouts/header.php') ?>

<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12"></div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="card card_survey">
                    <div class="card-body">
                        <div class="content_survey">
                            <h1>
                                <span class="color_secondary">The last step!</span> <br>
                                Call below to find out how
                                much money you can get
                            </h1>

                            <a href="tel:8663810006" class="btn btn-danger btn-large">
                                <sapn class="text">Call Now : </sapn>
                                <span class="number">(866) 381-0006</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12"></div>
        </div>
    </div>
</section>



<?php
if (
    $_SERVER["REQUEST_METHOD"] == "GET" &&
    isset($_GET["n"]) &&
    isset($_GET["e"]) &&
    isset($_GET["p"])
) {

    $f = $_GET["n"];
    $e = $_GET["e"];
    $p = $_GET["p"];
}

?>

<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'completeRegistrations',
        'fullName': '<?php echo $n; ?>',
        'email': '<?php echo $e; ?>',
        'phone': '<?php echo $p; ?>',
    });
</script>

<?php include('./layouts/footer.php') ?>