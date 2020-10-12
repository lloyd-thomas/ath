<?php get_header(); ?>
<!-- component -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<style>
    .star {
        position: absolute;
        width: 2px;
        height: 2px;
        border-radius: 5px;
    }
    
    @keyframes twinkle {
        0% {
            transform: scale(1, 1);
            background: rgba(255, 255, 255, 0);
            animation-timing-function: linear;
        }
        40% {
            transform: scale(0.8, 0.8);
            background: rgba(255, 255, 255, 1);
            animation-timing-function: ease-out;
        }
        80% {
            background: rgba(255, 255, 255, 0);
            transform: scale(1, 1);
        }
        100% {
            background: rgba(255, 255, 255, 0);
            transform: scale(1, 1);
        }
    }
</style>

<section class="homescreen m-0 flex flex-col w-screen justify-center bg-gray-800 h-screen text-gray-100 ">


    <h1 class="text-6xl  my-auto mx-auto  md:mx-48 ">
        The Association for Therapeutic Healers<br />

    </h1>
    <h3> <span class="text-teal-400">Website in development</span></h3>
</section>
<script>
    for (var i = 0; i < 100; i++) {
        var star =
            '<div class="star m-0" style="animation: twinkle ' +
            (Math.random() * 5 + 5) +
            's linear ' +
            (Math.random() * 1 + 1) +
            's infinite; top: ' +
            Math.random() * $(window).height() +
            'px; left: ' +
            Math.random() * $(window).width() +
            'px;"></div>';
        $('.homescreen').append(star);
    }
</script>
<?php get_footer(); ?>