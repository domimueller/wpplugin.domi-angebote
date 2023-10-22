<?php

/* Apply Filter Configuration for Inserate Archive */
//add_action('pre_get_posts', 'filter_posts_by_terms', 10, 1);



function filter_posts_by_termss( $query ) {
    
    // bail early if is in admin
    if( is_admin() ) return;
    
    
    // bail early if not main query
    // - allows custom code / plugins to continue working
    if( !$query->is_main_query() ) return;
    
    // only use it when right template
    // if ( !is_post_template( 'template-angebote' )  ) return;
    
     
 
    // update order setting
    
    //$query->set('orderby', 'insertion_price');   
    $query->set('order', 'ASC');    
    

    // get meta query
    $tax = $query->get('tax_query');

 

    // ##########################  GENERAL FILTER ##########################

    $taxQueryArgs = array();

    //$taxQueryArg = array();   

                  
            // ###### prepare the tax query ###### 
            // if a term is set (f.e. the user wants to filter by style) --> construct the tax query argument. 
            // if the value is not set, the user doesnt want to filter by tax --> do not apply the current filter and continue to the next filter 


    $taxonomyTermByParam = $_GET[ 'domi_angebotstyp_tax' ];               
    // ###### build the tax query ###### 
    $taxQueryArg = array(

        'taxonomy' => 'domi_angebotstyp_tax',
        'field' => 'name',
        'terms' => $taxonomyTermByParam,

    );                            

    // append tax query
    array_push($taxQueryArgs,$taxQueryArg);
 


   

    // update tax query    
    $query->set('tax_query', $taxQueryArgs);
    

}

?>
