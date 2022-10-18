$(document).ready(function () {
    $('.slideshow').each(function () {
        let $slideshow = $(this),
            $slides = $slideshow.find('li'),
            $prev = $slideshow.find('.prev'),
            $next = $slideshow.find('.next');

        $slides.first().addClass('active');

        $next.on('click', function () {
            let $activeSlide = $slides.filter('.active').first(),
                $nextSlide = $activeSlide.next();

            if ($nextSlide.length === 0) {
                $nextSlide = $slides.first();
            }

            $slides.removeClass('active');
            $nextSlide.addClass('active');
        });

        $prev.on('click', function () {
            let $activeSlide = $slides.filter('.active').first(),
                $prevSlide = $activeSlide.prev();

            if ($prevSlide.length === 0) {
                $prevSlide = $slides.last();
            }

            $slides.removeClass('active');
            $prevSlide.addClass('active');
        });
    });
});