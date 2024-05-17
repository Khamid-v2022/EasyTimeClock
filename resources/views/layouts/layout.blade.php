@isset($pageConfigs["myLayout"])
    @include(((( $pageConfigs["myLayout"] === 'blank') ? 'layouts.blankLayout' : 'layouts.navbarLayout') ))
@endisset