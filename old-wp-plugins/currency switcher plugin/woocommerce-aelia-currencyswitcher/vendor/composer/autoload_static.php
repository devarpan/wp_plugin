<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d2f7ed1b44dcc68caae0bae6febfcfb
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'fe1bcd0336136e435eaf197895daf81a' => __DIR__ . '/..' . '/nikic/php-parser/lib/bootstrap.php',
        'bc9d40452d8a53ce4dd8fd5fda8e0883' => __DIR__ . '/..' . '/daigo75/geoip/geoip.inc',
        'aec91620b593c30678f635dd5f1d30de' => __DIR__ . '/..' . '/daigo75/geoip/geoipcity.inc',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Console\\' => 26,
            'Sstalle\\php7cc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Sstalle\\php7cc\\' => 
        array (
            0 => __DIR__ . '/..' . '/sstalle/php7cc/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static $classMap = array (
        'Aelia\\CurrencySwitcher\\Billing_Country_Selector_Widget' => __DIR__ . '/../..' . '/lib/classes/widgets/billing-country-selector-widget.php',
        'Aelia\\CurrencySwitcher\\Logger' => __DIR__ . '/../..' . '/lib/classes/logger/wc-aelia-cs-logger.php',
        'Aelia\\CurrencySwitcher\\Reports' => __DIR__ . '/../..' . '/lib/classes/reporting/wc-aelia-cs-reports.php',
        'Aelia\\CurrencySwitcher\\Semaphore' => __DIR__ . '/../..' . '/lib/classes/base/semaphore/wc-aelia-semaphore.php',
        'Aelia\\CurrencySwitcher\\WC20\\Reports' => __DIR__ . '/../..' . '/lib/classes/reporting/wc20/wc-aelia-reports-wc20.php',
        'Aelia\\CurrencySwitcher\\WC21\\Reports' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/wc-aelia-reports-wc21.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Admin_Report' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-admin-report.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Customer_List' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-customer-list.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Sales_By_Category' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-sales-by-category.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Sales_By_Date' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-sales-by-date.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Sales_By_Product' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-sales-by-product.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Taxes_By_Code' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-taxes-by-code.php',
        'Aelia\\CurrencySwitcher\\WC21\\WC_CS_Report_Taxes_By_Date' => __DIR__ . '/../..' . '/lib/classes/reporting/wc21/reports/class-wc-cs-report-taxes-by-date.php',
        'Aelia\\CurrencySwitcher\\WC22\\Reports' => __DIR__ . '/../..' . '/lib/classes/reporting/wc22/wc-aelia-reports-wc22.php',
        'Aelia\\CurrencySwitcher\\WC23\\Reports' => __DIR__ . '/../..' . '/lib/classes/reporting/wc23/wc-aelia-reports-wc23.php',
        'Aelia_Order' => __DIR__ . '/../..' . '/lib/classes/order/wc-aelia-order.php',
        'Aelia_SessionManager' => __DIR__ . '/../..' . '/lib/classes/session/aelia-session-manager.php',
        'IWC_Aelia_CurrencyPrices_Manager' => __DIR__ . '/../..' . '/lib/classes/multiprice/wc-aelia-currencyprices-manager.php',
        'IWC_Aelia_ExchangeRatesModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-exchangeratesmodel.php',
        'IWC_Aelia_Reporting_Manager' => __DIR__ . '/../..' . '/lib/classes/reporting/wc-aelia-reporting-manager.php',
        'LoggerWrapper' => __DIR__ . '/../..' . '/lib/classes/logger/wc-aelia-logger-wrapper.php',
        'WC_Aelia_CS_Admin_Interface_Manager' => __DIR__ . '/../..' . '/lib/classes/integration/admin/wc-aelia-cs-admin-interface-manager.php',
        'WC_Aelia_CS_Bundles_Integration' => __DIR__ . '/../..' . '/lib/classes/integration/bundles-plugin/wc-aelia-cs-bundles-integration.php',
        'WC_Aelia_CS_Cart_Notices_Integration' => __DIR__ . '/../..' . '/lib/classes/integration/cart-notices-plugin/wc-aelia-cs-cart-notices-integration.php',
        'WC_Aelia_CS_Dynamic_Pricing_Integration' => __DIR__ . '/../..' . '/lib/classes/integration/dynamic-pricing-plugin/wc-aelia-cs-dynamic-pricing-integration.php',
        'WC_Aelia_Currencies_Manager' => __DIR__ . '/../..' . '/lib/classes/settings/wc-aelia-currencies-manager.php',
        'WC_Aelia_CurrencyPrices_Manager' => __DIR__ . '/../..' . '/lib/classes/multiprice/wc-aelia-currencyprices-manager.php',
        'WC_Aelia_CurrencySwitcher_Install' => __DIR__ . '/../..' . '/lib/classes/install/wc-aelia-currencyswitcher-install.php',
        'WC_Aelia_CurrencySwitcher_Settings' => __DIR__ . '/../..' . '/lib/classes/settings/wc-aelia-currencyswitcher-settings.php',
        'WC_Aelia_CurrencySwitcher_Settings_Renderer' => __DIR__ . '/../..' . '/lib/classes/settings/wc-aelia-currencyswitcher-settings-renderer.php',
        'WC_Aelia_CurrencySwitcher_Widget' => __DIR__ . '/../..' . '/lib/classes/widgets/wc-aelia-currencyswitcher-widget.php',
        'WC_Aelia_ExchangeRatesModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-exchangeratesmodel.php',
        'WC_Aelia_Google_Analytics_Integration' => __DIR__ . '/../..' . '/lib/classes/integration/google-analytics/wc-aelia-google-analytics-integration.php',
        'WC_Aelia_IP2Location' => __DIR__ . '/../..' . '/lib/classes/ip2location/wc-aelia-ip2location.php',
        'WC_Aelia_Install' => __DIR__ . '/../..' . '/lib/classes/install/wc-aelia-install.php',
        'WC_Aelia_KISSMetrics_Integration' => __DIR__ . '/../..' . '/lib/classes/integration/KISSmetrics/wc-aelia-kissmetrics-integration.php',
        'WC_Aelia_Message' => __DIR__ . '/../..' . '/lib/classes/install/wc-aelia-message.php',
        'WC_Aelia_OpenExchangeRatesModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-openexchangeratesmodel.php',
        'WC_Aelia_Reporting_Manager' => __DIR__ . '/../..' . '/lib/classes/reporting/wc-aelia-reporting-manager.php',
        'WC_Aelia_Settings' => __DIR__ . '/../..' . '/lib/classes/base/settings/wc-aelia-settings.php',
        'WC_Aelia_Settings_Renderer' => __DIR__ . '/../..' . '/lib/classes/base/settings/wc-aelia-settings-renderer.php',
        'WC_Aelia_TCBModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-turkeycentralbankmodel.php',
        'WC_Aelia_WebServiceXModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-webservicexmodel.php',
        'WC_Aelia_YahooFinanceModel' => __DIR__ . '/../..' . '/lib/classes/integration/exchange-rates-providers/wc-aelia-yahoofinancemodel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d2f7ed1b44dcc68caae0bae6febfcfb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d2f7ed1b44dcc68caae0bae6febfcfb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9d2f7ed1b44dcc68caae0bae6febfcfb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9d2f7ed1b44dcc68caae0bae6febfcfb::$classMap;

        }, null, ClassLoader::class);
    }
}
