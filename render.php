<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php 
   

    ob_start();
     // esc_html_e( 'Custom Search Block – hello from a dynamic block!', 'custom-search-block' ); 
    ?>
        <form class="tour-search" method="GET" action="/tour-search">
            <div class='form-fields'>
                <div class='form-segment'>
                    <label htmlFor='transport'><?php _e('Transport')?></label>
                    <input type='text' id='transport'></input>
                </div>
                <div class='form-segment'>
                    <label htmlFor='destination'><?php _e('Destination')?></label>
                    <input type='text' id='destination'></input>
                </div>
                <div class='form-segment'>
                    <label htmlFor='dateFrom'><?php _e('From')?></label>
                    <input type='date' id='dateFrom'></input>
                </div>
                <div class='form-segment'>
                    <label htmlFor='dateTo'><?php _e('To')?></label>
                    <input type='date' id='dateTo'></input>
                </div>
                <div class='form-segment'>
                    <label htmlFor='tourType'><?php _e('Tour Type')?></label>
                    <input type='text' id='tourType'></input>
                </div>
            </div>
            <input type="submit" value="<?php _e('Search') ?>">
        </form>
    <?php 
    // esc_html_e( 'Custom Search Block – hello from a dynamic block!', 'custom-search-block' ); 

    $form = ob_get_clean();
    
    ?>


<div <?php echo get_block_wrapper_attributes(); ?>>
    <?php
       echo $form;
    ?>
</div>
