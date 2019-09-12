<!doctype html>
<html lang="en" class="h-100">
<?php get_header("main"); ?>
<body class="d-flex flex-column h-100">
<?php get_header(); ?>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?php while(have_posts()){ ?>
        <?php the_post(); ?>
            <h1><?php the_title() ?></h1>
        <?php } ?>
    </div>
</main>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>
</body>
</html>
