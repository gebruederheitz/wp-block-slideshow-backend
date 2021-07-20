<?php
    $innerBlocks = get_query_var('innerBlocks');

    $autoplaySpeed = get_query_var('autoplaySpeed'); 
    $breakpointMedium = get_query_var('breakpointMedium'); 
    $breakpointSmall = get_query_var('breakpointSmall'); 
    $centerMode = get_query_var('centerMode'); 
    $centerModeMedium = get_query_var('centerModeMedium'); 
    $centerModeSmall = get_query_var('centerModeSmall'); 
    $dots = get_query_var('dots'); 
    $dotsMedium = get_query_var('dotsMedium'); 
    $dotsSmall = get_query_var('dotsSmall'); 
    $edgePadding = get_query_var('edgePadding'); 
    $edgePaddingMedium = get_query_var('edgePaddingMedium'); 
    $edgePaddingSmall = get_query_var('edgePaddingSmall'); 
    $infiniteLoop = get_query_var('infiniteLoop'); 
    $infiniteLoopMedium = get_query_var('infiniteLoopMedium'); 
    $infiniteLoopSmall = get_query_var('infiniteLoopSmall'); 
    $initialSlide = get_query_var('initialSlide'); 
    $slidesShown = get_query_var('slidesShown'); 
    $slidesShownMedium = get_query_var('slidesShownMedium'); 
    $slidesShownSmall = get_query_var('slidesShownSmall'); 
    $slidesToScroll = get_query_var('slidesToScroll'); 
    $slidesToScrollMedium = get_query_var('slidesToScrollMedium'); 
    $slidesToScrollSmall = get_query_var('slidesToScrollSmall'); 
    $useAutoplay = get_query_var('useAutoplay'); 
    $useAutoplayMedium = get_query_var('useAutoplayMedium'); 
    $useAutoplaySmall = get_query_var('useAutoplaySmall'); 
?>
<div
    class="ghwp-slideshow"
    data-ghwp-slider-count="<?= $slidesShown ?>"
    data-ghwp-slider-count-medium="<?= $slidesShownMedium ?>"
    data-ghwp-slider-count-small="<?= $slidesShownSmall ?>"
    data-ghwp-slider-group="<?= $slidesToScroll ?>"
    data-ghwp-slider-group-medium="<?= $slidesToScrollMedium ?>"
    data-ghwp-slider-group-small="<?= $slidesToScrollSmall ?>"
    data-ghwp-slider-autoplay="<?= $useAutoplay ?>"
    data-ghwp-slider-autoplay-medium="<?= $useAutoplayMedium ?>"
    data-ghwp-slider-autoplay-small="<?= $useAutoplaySmall ?>"
    data-ghwp-slider-speed="<?= $autoplaySpeed ?>"
    data-ghwp-slider-infinite="<?= $infiniteLoop ?>"
    data-ghwp-slider-infinite-medium="<?= $infiniteLoopMedium ?>"
    data-ghwp-slider-infinite-small="<?= $infiniteLoopSmall ?>"
    data-ghwp-slider-center="<?= $centerMode ?>"
    data-ghwp-slider-center-medium="<?= $centerModeMedium ?>"
    data-ghwp-slider-center-small="<?= $centerModeSmall ?>"
    data-ghwp-slider-edges="<?= $edgePadding ?>"
    data-ghwp-slider-edges-medium="<?= $edgePaddingMedium ?>"
    data-ghwp-slider-edges-small="<?= $edgePaddingSmall ?>"
    data-ghwp-slider-breakpoint-medium="<?= $breakpointMedium ?>"
    data-ghwp-slider-breakpoint-small="<?= $breakpointSmall ?>"
    data-ghwp-slider-initial="<?= $initialSlide ?>"
    data-ghwp-slider-dots="<?= $dots ?>"
    data-ghwp-slider-dots-medium="<?= $dotsMedium ?>"
    data-ghwp-slider-dots-small="<?= $dotsSmall ?>"
>
    <?= $innerBlocks ?>
</div>
