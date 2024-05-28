<?php

namespace Gebruederheitz\GutenbergBlocks\Slideshow;

use Gebruederheitz\GutenbergBlocks\BlockRegistrar;
use Gebruederheitz\GutenbergBlocks\DynamicBlock;

class SlideshowBlock
{
    /** @var DynamicBlock */
    protected $blockHandler;

    protected const ATTRIBUTES = [
        'autoplaySpeed' => [
            'type' => 'number',
            'default' => 2000,
        ],
        'breakpointMedium' => [
            'type' => 'number',
            'default' => 992,
        ],
        'breakpointSmall' => [
            'type' => 'number',
            'default' => 576,
        ],
        'centerMode' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'centerModeMedium' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'centerModeSmall' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'dots' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'dotsMedium' => [
            'type' => 'boolean',
            'default' => true,
        ],
        'dotsSmall' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'edgePadding' => [
            'type' => 'number',
            'default' => 0,
        ],
        'edgePaddingMedium' => [
            'type' => 'number',
            'default' => 0,
        ],
        'edgePaddingSmall' => [
            'type' => 'number',
            'default' => 50,
        ],
        'gap' => [
            'type' => 'number',
            'default' => 0,
        ],
        'gapMedium' => [
            'type' => 'number',
            'default' => 0,
        ],
        'gapSmall' => [
            'type' => 'number',
            'default' => 0,
        ],
        'imageShowCaptions' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'infiniteLoop' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'infiniteLoopMedium' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'infiniteLoopSmall' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'initialSlide' => [
            'type' => 'number',
            'default' => 0,
        ],
        'slidesShown' => [
            'type' => 'number',
            'default' => 3,
        ],
        'slidesShownMedium' => [
            'type' => 'number',
            'default' => 2,
        ],
        'slidesShownSmall' => [
            'type' => 'number',
            'default' => 1,
        ],
        'slidesToScroll' => [
            'type' => 'number',
            'default' => 3,
        ],
        'slidesToScrollMedium' => [
            'type' => 'number',
            'default' => 2,
        ],
        'slidesToScrollSmall' => [
            'type' => 'number',
            'default' => 1,
        ],
        'useAutoplay' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'useAutoplayMedium' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'useAutoplaySmall' => [
            'type' => 'boolean',
            'default' => false,
        ],
        'sliderLibrary' => [
            'type' => 'string',
            'default' => SlideshowLibraries::GLIDE,
        ],
        'sliderType' => [
            'type' => 'string',
            'default' => '',
        ],
        'linkingType' => [
            'type' => 'string',
            'default' => LinkingTypes::NONE,
        ],
        'thumbnailCount' => [
            'type' => 'number',
            'default' => 10,
        ],
        'thumbnailCountMedium' => [
            'type' => 'number',
            'default' => 6,
        ],
        'thumbnailCountSmall' => [
            'type' => 'number',
            'default' => 4,
        ],
    ];

    protected const REQUIRED_ATTRIBUTES = [];

    public function __construct()
    {
        BlockRegistrar::getInstance();
        $this->blockHandler = new DynamicBlock(
            'ghwp/slideshow',
            __DIR__ . '/../templates/slideshow.php',
            self::ATTRIBUTES,
            self::REQUIRED_ATTRIBUTES,
            'template-parts/blocks/slideshow.php'
        );
        $this->blockHandler->register();
    }

}
