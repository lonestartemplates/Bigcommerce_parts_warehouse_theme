<?php
/**
 * Configuration File
 *
 * Sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 * @version 1.0
 *
 */

// The name of the template, as it will appear in the Theme Store
$GLOBALS['TPL_CFG']['Name'] = 'Parts Warehouse theme';

// Enable or disable Internationalization(I18N and L10N) for this theme
$GLOBALS['TPL_CFG']['International'] = false;

// The physical name of the template, as determined by the directory it is stored within.
$GLOBALS['TPL_CFG']['PhysicalName'] = basename(__DIR__);

// The version of the template, as it will appear in the control panel
$GLOBALS['TPL_CFG']['Version'] = '1.0';

$GLOBALS['TPL_CFG']['Premium'] = array(
    // price in cents
    'price' => 149000,
    'currency' => 'usd',
    'partner' => '',
);

$GLOBALS['TPL_CFG']['Partner'] = array(
    'Name' => '',
//    'Contact' => 'http://lonestartemplates.com/contact/',
    'Email' => 'lonestartemplates@gmail.com',
);

// Make the theme editable with the Style Editor.
$GLOBALS['TPL_CFG']['StyleEditable'] = false;

$GLOBALS['TPL_CFG']['Responsive'] = true;

$GLOBALS['TPL_CFG']['FeaturesTextArray'] = array(
//    "Feature 1",
//    "Feature 2",
);

// List of supported devices
// e.g. "This theme has been tested and approved for use on Chrome, Safari, Firefox, Opera, IE8+, Apple iOS, Android and Windows Mobile Devices."
$GLOBALS['TPL_CFG']['DevicesText'] = "";

// Theme details/description; supports HTML.
$GLOBALS['TPL_CFG']['DescriptionHtml'] = "<p></p>";


// Recommended dimensions of a logo when it's displayed in the header of this template
$GLOBALS['TPL_CFG']['LogoWidth'] = 340;
$GLOBALS['TPL_CFG']['LogoHeight'] = 50;

// Recommended dimensions of carousel images
$GLOBALS['TPL_CFG']['SlideShowWidth'] = 718;
$GLOBALS['TPL_CFG']['SlideShowHeight'] = 323;

// The maximum width an image uploaded in DevEdit can be before it's resized.
// This is used to make sure product images uploaded in DevEdit don't stretch
// out past the main content area of the template
$GLOBALS['TPL_CFG']['MaxImageWidth'] = 575;

// The maximum number of products that can be compared side-by-side without
// messing up the layout of the template
$GLOBALS['TPL_CFG']['MaxComparisonProducts'] = 4;

// The "Powered by" line that this template should use.
// These lines can be adjusted in /includes/whitelabel.php
$GLOBALS['TPL_CFG']['PoweredBy'] = 5;

$GLOBALS['TPL_CFG']['NewsPreviewLength']    = 80;
$GLOBALS['TPL_CFG']['MaxHomePageNewsItems'] = 3;

$GLOBALS['TPL_CFG']['EnableFlyoutMenuSupport'] = true;

$GLOBALS['TPL_CFG']['SupportsSettings'] = true;
$GLOBALS['TPL_CFG']['Features']         = 1 | 2; // Theme::FEATURE_CAROUSEL | Theme::FEATURE_SOCIAL_ICONS

$GLOBALS['TPL_CFG']['RecommendedCategoryImageWidth']  = 175;
$GLOBALS['TPL_CFG']['RecommendedCategoryImageHeight'] = 175;

$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesStorewideThumbnail_width']       = 175;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesStorewideThumbnail_height']      = 175;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesStorewideThumbnail_timeChanged'] = time();

$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesProductPageImage_width']       = 350;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesProductPageImage_height']      = 350;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesProductPageImage_timeChanged'] = time();

$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesGalleryThumbnail_width']       = 40;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesGalleryThumbnail_height']      = 53;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesGalleryThumbnail_timeChanged'] = time();

$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesZoomImage_width']       = 1280;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesZoomImage_height']      = 1280;
$GLOBALS['TPL_CFG']['ConfigDefaults']['ProductImagesZoomImage_timeChanged'] = time();

$GLOBALS['TPL_CFG']['ConfigDefaults']['CustomersAlsoViewedCount'] = 5
$GLOBALS['TPL_CFG']['ConfigDefaults']['HomeFeaturedProducts']     = 4;
$GLOBALS['TPL_CFG']['ConfigDefaults']['HomeNewProducts']          = 4
$GLOBALS['TPL_CFG']['ConfigDefaults']['CategoryProductsPerPage']  = 12;

$GLOBALS['TPL_CFG']['ConfigDefaults']['enableMobileTemplate'] = !$GLOBALS['TPL_CFG']['Responsive'];
$GLOBALS['TPL_CFG']['ConfigDefaults']['SocialMedia_UseThemeIcons'] = 1;

$GLOBALS['TPL_CFG']['CategoryFlyoutClass'] = 'sf-horizontal';

$GLOBALS['TPL_CFG']['Fonts'] = array(
    'Open Sans' => array(
        'type' => 'css',
        'url' => '//fonts.googleapis.com/css?family=Open+Sans:300,700',
        'contextsRequiredBy' => array(
            'design',
        ),
    ),
);


$GLOBALS['TPL_CFG']['Stylesheets'] = array(
    array(
        'stylesheet' => 'Styles/iselector.css',
    ),
    array(
        'stylesheet' => 'Styles/flexslider.css',
    ),
    array(
        'stylesheet' => 'Styles/slide-show.css',
    ),
    array(
        'stylesheet' => 'Styles/styles-slide-show.css',
    ),
    array(
        'stylesheet' => 'Styles/social.css',
    ),
    array(
        'stylesheet' => 'Styles/styles.css',
    ),
    array(
        'stylesheet' => 'Styles/' . Store_Config::get('SiteColor') . '.css',
    ),
    array(
        'stylesheet' => 'Styles/theme.css',
    ),
    array(
        'stylesheet' => 'Styles/grid.css',
    ),
    array(
        'stylesheet' => 'Styles/custom.css',
    ),
    array(
        'stylesheet' => 'Styles/responsive.css',
    ),
);

// URL of a demo store in following format "http://theme-name-demo.mybigcommerce.com"
$GLOBALS['TPL_CFG']['DemoStore'] = "http://partswarehouse.mybigcommerce.com/";

// Is theme enabled? (i.e. visible in Theme Store)
$GLOBALS['TPL_CFG']['Enabled'] = Store_Feature::isEnabled('LoneStarTemplatesTheme');
