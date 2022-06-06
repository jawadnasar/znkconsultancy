<?php

    $get = '/'.strtolower(isset($_GET['url']) ? $_GET['url'] : '');
    
    switch($get){
    case '/':  
        ROUTE::set('/', function(){
            Controller::callPage("home");
        });
    break;
    case '/home':  
        ROUTE::set('/home', function(){
            Controller::callPage("home");
        });
    break;
    case '/aboutus':  
        ROUTE::set('/aboutus', function(){
            Controller::callPage("aboutus");
        });
    break;
    case '/authorization_by_fca':  
        ROUTE::set('/authorization_by_fca', function(){
            Controller::callPage("authorization_by_fca");
        });
    break;
    case '/it_services':  
        ROUTE::set('/it_services', function(){
            Controller::callPage("it_services");
        });
    break;
    case '/prfessional_services':  
        ROUTE::set('/prfessional_services', function(){
            Controller::callPage("prfessional_services");
        });
    break;
    case '/outsourced_compliance':  
        ROUTE::set('/outsourced_compliance', function(){
            Controller::callPage("outsourced_compliance");
        });
    break;
    case '/total_compliance_solutions':  
        ROUTE::set('/total_compliance_solutions', function(){
            Controller::callPage("total_compliance_solutions");
        });
    break;
    case '/compliance_audit':  
        ROUTE::set('/compliance_audit', function(){
            Controller::callPage("compliance_audit");
        });
    break;
    case '/money_laundering_regulations':  
        ROUTE::set('/money_laundering_regulations', function(){
            Controller::callPage("money_laundering_regulations");
        });
    break;
    case '/compliance_support':  
        ROUTE::set('/compliance_support', function(){
            Controller::callPage("compliance_support");
        });
    break;
    case '/bank_account_opening':  
        ROUTE::set('/bank_account_opening', function(){
            Controller::callPage("bank_account_opening");
        });
    break;
    case '/branding_and_designing':  
        ROUTE::set('/branding_and_designing', function(){
            Controller::callPage("branding_and_designing");
        });
    break;
    case '/social_media_marketing':  
        ROUTE::set('/social_media_marketing', function(){
            Controller::callPage("social_media_marketing");
        });
    break;
    case '/webdesign_and_hosting':  
        ROUTE::set('/webdesign_and_hosting', function(){
            Controller::callPage("webdesign_and_hosting");
        });
    break;
    case '/interpreters':  
        ROUTE::set('/interpreters', function(){
            Controller::callPage("interpreters");
        });
    break;
    // case '/':  
    //     ROUTE::set('/', function(){
    //         Controller::callPage("");
    //     });
    // break;
    default:
        echo "404 No page found!";
        // Controller::viewPage('404');
    }

?>