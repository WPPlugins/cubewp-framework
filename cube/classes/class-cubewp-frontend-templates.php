<?php

/**
 * CubeWp Frontend templates is for display of single post and archive templates
 *
 * @version 1.0.5
 * @package cubewp/cube/classes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * CubeWp_frontend
 */
class CubeWp_Frontend_Templates {
    
    private $post_type = '';
    private $elementor_template = false;
    
    public function __construct( ) {
        add_filter( 'elementor/theme/need_override_location', [ $this, 'elementor_template_include' ], 10, 2 );
        add_filter('template_include', array($this, 'cubewp_custom_templates'), 9999);
    }

    /**
     * Method elementor_template_include
     *
     * @return bool
     * @since  1.0.5
     */
    public function elementor_template_include( $need_override_location, $location ) {
        if ( 'single' === $location || 'archive' === $location  ) {
			$this->elementor_template = true;
		}
		return $this->elementor_template;
	}

    /**
     * Method theme_single_post_template
     *
     * @return bool
     * @since  1.0.5
     */
    private function theme_single_post_template() {
        $post_type = $this->post_type;
        if (file_exists(get_template_directory() . '/single-' . $post_type . '.php')){
             return true;
         }
        return false;
    }

    /**
     * Method theme_archive_template
     *
     * @return bool
     * @since  1.0.5
     */
    private function theme_archive_template() {
        $post_type = $this->post_type;
        if (file_exists(get_template_directory() . '/archive-' . $post_type . '.php')){
             return true;
         }
        return false;
    }
        
    /**
     * Method custom_post_type_template
     *
     * @param string $template
     *
     * @return string
     * @since  1.0.0
     */
    public function cubewp_custom_templates($template = '') {
        $get_CustomTypes = CWP_types();

        if (is_array($get_CustomTypes) && !empty($get_CustomTypes) && count($get_CustomTypes)!=0) {
            foreach ($get_CustomTypes as $single_cpt) {
                $this->post_type = $single_cpt['slug'];

                // Custom Single Page
                if(is_singular($single_cpt['slug'])){
                    if(!$this->elementor_template && !$this->theme_single_post_template()){
                        return $this->cubewp_single_template();
                    }
                }elseif(is_archive()){
                    if(!$this->elementor_template && !$this->theme_archive_template()){
                        return $this->cubewp_archive_template();
                    }
                }
            }
        }
        return $template;
    }

    /**
     * Method cubewp_single_template
     *
     */
    public static function cubewp_single_template() {
        return CWP_PLUGIN_PATH . 'cube/templates/single-cpt.php';
    }

    /**
     * Method init
     *
     */
    public static function cubewp_archive_template() {
        return CWP_PLUGIN_PATH . 'cube/templates/archive-cpt.php';
    }
        
    /**
     * Method init
     *
     * @return void
     */
    public static function init() {
        $CubeClass = __CLASS__;
        new $CubeClass;
    }
    
    
}