<?php

    use Gebruederheitz\GutenbergBlocks\Slideshow\LinkingTypes;
    use Gebruederheitz\GutenbergBlocks\Slideshow\SlideshowLibraries;

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
    $gap = get_query_var('gap');
    $gapMedium = get_query_var('gapMedium');
    $gapSmall = get_query_var('gapSmall');
    $imageShowCaptions = get_query_var('imageShowCaptions');
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

    $sliderLibrary = get_query_var('sliderLibrary');
    $linkingType = get_query_var('linkingType');
    $thumbnailCount = get_query_var('thumbnailCount');
    $thumbnailCountMedium = get_query_var('thumbnailCountMedium');
    $thumbnailCountSmall = get_query_var('thumbnailCountSmall');
    $sliderType = get_query_var('sliderType');

    $classNames = [
        'ghwp-slideshow',
        'ghwp-slideshow--'.$sliderLibrary,
    ];

    if (isset($args['className'])) {
        $classNames[] = $args['className'];
    }

    if ($imageShowCaptions) {
        $classNames[] = 'with-captions';
    }
?>
<div
    class="<?= implode(' ', $classNames) ?>"
    data-ghwp-slider-lib="<?= $sliderLibrary ?>"
    data-ghwp-slider-count="<?= $slidesShown ?>"
    data-ghwp-slider-count-medium="<?= $slidesShownMedium ?>"
    data-ghwp-slider-count-small="<?= $slidesShownSmall ?>"
    data-ghwp-slider-group="<?= $slidesToScroll ?>"
    data-ghwp-slider-group-medium="<?= $slidesToScrollMedium ?>"
    data-ghwp-slider-group-small="<?= $slidesToScrollSmall ?>"
    data-ghwp-slider-autoplay="<?= json_encode($useAutoplay) ?>"
    data-ghwp-slider-autoplay-medium="<?= json_encode($useAutoplayMedium) ?>"
    data-ghwp-slider-autoplay-small="<?= json_encode($useAutoplaySmall) ?>"
    data-ghwp-slider-speed="<?= $autoplaySpeed ?>"
    data-ghwp-slider-gap="<?= $gap ?>"
    data-ghwp-slider-gap-medium="<?= $gapMedium ?>"
    data-ghwp-slider-gap-small="<?= $gapSmall ?>"
    data-ghwp-slider-infinite="<?= json_encode($infiniteLoop) ?>"
    data-ghwp-slider-infinite-medium="<?= json_encode($infiniteLoopMedium) ?>"
    data-ghwp-slider-infinite-small="<?= json_encode($infiniteLoopSmall) ?>"
    data-ghwp-slider-center="<?= json_encode($centerMode) ?>"
    data-ghwp-slider-center-medium="<?= json_encode($centerModeMedium) ?>"
    data-ghwp-slider-center-small="<?= json_encode($centerModeSmall) ?>"
    data-ghwp-slider-edges="<?= $edgePadding ?>"
    data-ghwp-slider-edges-medium="<?= $edgePaddingMedium ?>"
    data-ghwp-slider-edges-small="<?= $edgePaddingSmall ?>"
    data-ghwp-slider-breakpoint-medium="<?= $breakpointMedium ?>"
    data-ghwp-slider-breakpoint-small="<?= $breakpointSmall ?>"
    data-ghwp-slider-initial="<?= $initialSlide ?>"
    data-ghwp-slider-dots="<?= json_encode($dots) ?>"
    data-ghwp-slider-dots-medium="<?= json_encode($dotsMedium) ?>"
    data-ghwp-slider-dots-small="<?= json_encode($dotsSmall) ?>"
    data-ghwp-slider-type="<?= $sliderType ?>"
>
    <?= $innerBlocks ?>
</div>
<?php if ($sliderLibrary === SlideshowLibraries::SPLIDE && $linkingType !== LinkingTypes::NONE): ?>
<div
    class="ghwp-slideshow ghwp-slideshow--secondary"
    data-ghwp-slider-lib="<?= $sliderLibrary ?>"
    data-ghwp-slider-link-type="<?= $linkingType ?>"
    data-ghwp-slider-count="<?= $thumbnailCount ?>"
    data-ghwp-slider-count-medium="<?= $thumbnailCountMedium ?>"
    data-ghwp-slider-count-small="<?= $thumbnailCountSmall ?>"
    data-ghwp-slider-dots="false"
    data-ghwp-slider-dots-medium="false"
    data-ghwp-slider-dots-small="false"
>
    <?= $innerBlocks ?>
</div>
<?php endif; ?>
