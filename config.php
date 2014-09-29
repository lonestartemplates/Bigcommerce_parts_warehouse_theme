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
    'price' => 12900,
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
$GLOBALS['TPL_CFG']['DescriptionHtml'] = "<p>PartsWAREHOUSE is the ultimate automotive theme with top notch, no nonsense features that are proven to help your products sell. PartsWAREHOUSE can be as simple and clean or as complex and colorful as you want it to be. It’s extremely customizable, easy to use and fully responsive. Responsive web design is a web design approach aimed at providing an optimal viewing experience, easy reading and navigating with a minimum of resizing, panning, and scrolling across a wide range of devices from mobile phones to desktop computer monitors. PartsWAREHOUSE is suitable for every type of store and is great as a starting point for your Bigcommerce website. Take your ecommerce shop to the next level with PartsWAREHOUSE.

</p>
<ul>
<h3>Features</h3>

<li>Fully Responsive and extremely mobile friendly</li>
<li>Performance optimized for fast loading</li>
<li>Modern, no nonsense design and layout that will withstand the test of time.</li>
<li>Sticky header on mobile view keeps your branding front and center.</li>
<li>Back to Top link allows users to jump to the top of any given page.</li>
<li>Customized responsive fly-out menu with a sticky header and dynamic social media icons</li>
<li>Persistent newsletter signup form on each page to maximize email address capture</li>
<li>Persistent search options </li>
<li>Styled share icons on product page</li>
<li>Styled quick view page allows your to view a product without going to another page</li>
<li>Styled sale tab easily let's customer know when a product is on sale</li>
<li>PSD file provided for carousel banner</li>
<li>PSD file provided for category images</li>
</ul>";


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
