<?php
wp_enqueue_style('cubewp-template-library');
$current_user = wp_get_current_user();
if( $current_user->user_firstname ){
	$display_name = $current_user->user_firstname;
}else{
	$display_name = $current_user->user_login;
}
?>
<div class="cwp-welcome-title">
    <h2>Welcome <?php echo $display_name; ?>! Let’s Get Started.</h2>
</div>
<div class="cubwp-welcome">
    <div class="cwp-dashboard-content-panel" id="Dashboard">
        <div class="cwp-dashboard-content">
			<?php do_action( 'cwp-welcome-theme-header' ); ?>
            <div class="cwp-dashboard-data-structure first-data-structure">
                <div class="cwp-dashboard-data-structure-header">
                    <div class="cwp-dashboard-data-structure-header-details">
                        <h3>All CubeWP Dynamic Templates Library</h3>
                        <p>Discover here variety of templates for different categories that will help you kick start your project. All currently available templates are exclusively available with any <a href="https://cubewp.com/" target="_blank">CubeWP All Access</a> premium plan. If you have already purchased a premium plan or a deal via AppSumo you can access all the Themes from downloads page under <a href="https://cubewp.com/my-account" target="_blank">My Account</a></p>
                    </div>
                </div>
                <div class="cwp-dashboard-data-structure-content">
                    <div class="cwp-dashboard-data-structure-pages yellowBooks">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">YellowBooks</h2>
                            <p class="description">Create a online business directory.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> Advanced Search & Filtering</li>
                                    <li><span class="dashicons dashicons-yes"></span> Front-end Listing Submission Form</li>
                                    <li><span class="dashicons dashicons-yes"></span> Claim Your Business Listing</li>
                                    <li><span class="dashicons dashicons-yes"></span> Multi-Criteria Reviews & Rating</li>
                                </ul>
                            </div>
                            <div class="download-btn">
                                <a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank">Try Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
								<a href="https://cubewp.com/pricing/" target="_blank">Buy Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <p>Included with All CubeWP Premium Plans</p>
                            </div>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/YELLOW-BOOKS.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages clx">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">CLX</h2>
                            <p class="description">Create a local classified ads website.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> ‘Make an Offer’ functionality</li>
                                    <li><span class="dashicons dashicons-yes"></span> Peer-to-Peer messaging system</li>
                                    <li><span class="dashicons dashicons-yes"></span> Options to Promote Ad posts</li>
                                    <li><span class="dashicons dashicons-yes"></span> Dedicated User Profile Page</li>
                                </ul>
                            </div>
                            <div class="download-btn">
								<a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank">Try Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <a  href="https://cubewp.com/pricing/" target="_blank">Buy Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <p>Included with All CubeWP Premium Plans</p>
                            </div>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/CLX.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages streetWise">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">StreetWise</h2>
                            <p class="description">Create a platform to buy and sell properties.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> Advanced Search & Filtering</li>
                                    <li><span class="dashicons dashicons-yes"></span> Agent Profile with Listings & Reviews</li>
                                    <li><span class="dashicons dashicons-yes"></span> Request a Quote / Ask a Question Forms</li>
                                    <li><span class="dashicons dashicons-yes"></span> Report a Listing</li>
                                </ul>
                            </div>
                            <div class="download-btn">
								<a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank">Try Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <a  href="https://cubewp.com/pricing/" target="_blank">Buy Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <p>Included with All CubeWP Premium Plans</p>
                            </div>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/STREET-WISE.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages classifiedPro">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">ClassifiedPro</h2>
                            <p class="description">Multipurpose Local Ads & Listing WordPress Theme.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> AI-powered Recommendation Engine</li>
                                    <li><span class="dashicons dashicons-yes"></span> ‘Make an Offer’ functionality</li>
                                    <li><span class="dashicons dashicons-yes"></span> Peer-to-Peer messaging system</li>
                                    <li><span class="dashicons dashicons-yes"></span> Front-end submission with live preview</li>
                                </ul>
                            </div>
                            <div class="download-btn">
                                <a href="https://demowp.io/get-demo.php?demo=ClassifiedPro" target="_blank">Try Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
								<a  href="https://themeforest.net/item/classifiedpro-recommerce-classified-wordpress-theme/44528010?s_rank=1" target="_blank">Buy Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <p>Exclusive Available on Envato</p>
                            </div>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/CLASSIFIED-PRO.png'; ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cwp-dashboard-content-sidebar">
            <div class="cwp-dashboard-sidebar">
                <div class="cwp-welcome-box">
                    <div class="cwp-welcome-box-content">
                        <h2>CubeWP Framework</h2>
                        <p>CubeWP is an end-to-end dynamic content framework for WordPress to help you shrink time and cut cost of development up to 90%.</p>
                        <div class="cwp-learmore-addons">
                            <a target="_blank" href="https://cubewp.com/store/">Learn More</a>
                        </div>
                    </div>
                    <div class="cwp-welcome-box-logo">
                        <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/cube-addons.png'; ?>" alt="" />
                    </div>
                </div>
                <div class="cwp-welcome-sidebar-box">
                    <div class="cwp-welcome-alert-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <h5>Looking for WordPress Customization Vendor for CubeWP?</h5>
                    </div>
                    <div class="cwp-welcome-box-content">
                    <h2>Request a Free Quote Today!</h2>
                    <p>WPVender team specializes in delivering white-label services for CubeWP framework and they are tailored to fit all your specific WordPress customization needs.</p>
                        <div class="cwp-learmore-addons">
                            <a target="_blank" href="https://wpvender.com/" >Learn More</a>
                        </div>
                    </div>
                    <div class="cwp-welcome-box-logo">
                        <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/WPVender.png'; ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
