<?php
global $data;
$theme     = wp_get_theme();
$intro_img        = get_template_directory_uri() . '/assets/images/intro_img.png';
$slider_icon      = get_template_directory_uri() . '/assets/images/slider-icon.png';
$progressBar_icon = get_template_directory_uri() . '/assets/images/progressBar-icon.png';
$countdown_icon   = get_template_directory_uri() . '/assets/images/countdown-icon.png';
$accordion_icon   = get_template_directory_uri() . '/assets/images/accordion-icon.png';
$masonry_icon     = get_template_directory_uri() . '/assets/images/masonry-icon.png';
$counter_icon     = get_template_directory_uri() . '/assets/images/counter-icon.png';
$design_library   = get_template_directory_uri() . '/assets/images/design-library.png';

use Codemanas\CMEnterprise\ThemeInfo\ThemeSetting;

?>

<div class="cm-admin cm-admin-info__wrapper">
    <div class="cm-admin-top__section">
        <div class="cm-admin-topbar">
            <h2>
				<?php echo esc_html( $theme['Name'] ); ?>
            </h2>
        </div>
        <div class="cm-admin-top-right__section">
            <a href="<?php echo esc_url('http://demo.cmblocks.com/cm-enterprise/')?>" class="cm-theme-admin-btn-primary" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
            <a href="<?php echo esc_url('https://docs.cmblocks.com/')?>" class="cm-theme-admin-btn-outline" target="_blank"><?php echo __( 'Documentation', 'cm-enterprise' ); ?></a>
        </div>
    </div>
    <!--    intro section starts-->
    <div class="cm-admin-intro">
        <div class="cm-admin-intro__info">
            <h3><?php echo __( 'CM Blocks - WordPress Blocks Unleashed', 'cm-enterprise' ); ?></h3>
            <h2><?php echo __( 'Easily start building your websites with CM Blocks', 'cm-enterprise' ); ?></h2>
            <p class="desc"><?php echo __( 'CM Blocks is a custom WordPress blocks plugin designed to streamline the process of building websites using the WordPress platform. WordPress blocks, introduced with the Gutenberg editor, are content elements that allow users to add various types of content to their posts or pages in a visually appealing and structured manner.', 'cm-enterprise' ); ?></p>
            <a href="<?php echo esc_url( 'https://cmblocks.com/' ) ?>" class="body-btn-primary" target="_blank">
				<?php echo __( 'Get CM Blocks Suite', 'cm-enterprise' ); ?>
            </a>
        </div>
        <div class="cm-admin-intro__img">
            <img src="<?php echo esc_url( $intro_img ); ?>" alt="<?php echo __( 'CM BLocks Collection images', 'cm-enterprise' ); ?>">
        </div>
    </div>
    <!--    intro section ends-->
    <div class="cm-admin-main">
        <div class="main__wrapper">
            <div class="cm-admin_tabs-wrapper">
                <div class="cm-admin_tabs">
                    <div class="tab active" id="tab1"><?php echo __( 'Get Started', 'cm-enterprise' ); ?></div>
                    <div class="tab" id="tab2"><?php echo __( 'Change Log', 'cm-enterprise' ); ?></div>
                    <div class="tab" id="tab3"><?php echo __( 'CM Blocks', 'cm-enterprise' ); ?></div>
                </div>

                <div class="tab-panel-container">
                    <div class="tab-panel active" data-tab="tab1">
                        <div class="tab-section__wrapper">
                            <div class="tab-section">
                                <h3 class="section-header"><?php echo __( 'Quick Settings', 'cm-enterprise' ); ?></h3>
                                <div class="quick-setting__wrapper">
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'Header', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( '/site-editor.php?postId=cm-enterprise%2F%2Fheader&postType=wp_template_part&canvas=edit' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'Footer ', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( '/site-editor.php?postType=wp_template_part&postId=cm-enterprise%2F%2Ffooter&canvas=edit' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'Styles Variation', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'Navigation', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fnavigation' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'All Templates', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fwp_template%2Fall' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quick-setting__card">
                                        <div class="quick-setting__card-title">
                                            <h4><?php echo __( 'Page Templates', 'cm-enterprise' ); ?></h4>
                                            <a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fwp_template' ) ); ?>">
                                                <svg width="48" height="43"
                                                     viewBox="0 0 48 43"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M40 2.40333C44.5 -2.09668 49.5 5.40329 44.5 8.4033L40 2.40333ZM21 18.5L38.75 3.5L41 6.5L43.25 9.5L25.5 25.5L18.494 26.6677C17.6773 26.8038 17.0585 25.9451 17.4459 25.2134L21 18.5ZM1 10C1 7.79086 2.79086 6 5 6H25C26.1046 6 27 6.89543 27 8C27 9.10457 26.1046 10 25 10H5V38.5H35V23.5C35 22.3954 35.8954 21.5 37 21.5C38.1046 21.5 39 22.3954 39 23.5V38.5C39 40.7091 37.2091 42.5 35 42.5H5C2.79086 42.5 1 40.7091 1 38.5V10Z"/>
                                                    <path d="M40 2.40333L39.6464 2.04978L39.3398 2.35642L39.6 2.70333L40 2.40333ZM44.5 8.4033L44.1 8.70331L44.3706 9.06406L44.7572 8.83205L44.5 8.4033ZM38.75 3.5L39.15 3.2L38.832 2.77605L38.4273 3.1181L38.75 3.5ZM21 18.5L20.6773 18.1181L20.6034 18.1805L20.5581 18.2661L21 18.5ZM41 6.5L40.6 6.8L40.6 6.8L41 6.5ZM43.25 9.5L43.5848 9.87139L43.9241 9.56549L43.65 9.2L43.25 9.5ZM25.5 25.5L25.5822 25.9932L25.7263 25.9692L25.8348 25.8714L25.5 25.5ZM18.494 26.6677L18.5762 27.1609L18.5762 27.1609L18.494 26.6677ZM17.4459 25.2134L17.004 24.9794L17.004 24.9794L17.4459 25.2134ZM5 10V9.5H4.5V10H5ZM5 38.5H4.5V39H5V38.5ZM35 38.5V39H35.5V38.5H35ZM40.3536 2.75689C41.3923 1.71809 42.4038 1.42063 43.2478 1.51726C44.1054 1.61545 44.8769 2.13013 45.4036 2.87856C45.9303 3.62708 46.1872 4.57617 46.045 5.49051C45.905 6.39075 45.3725 7.29673 44.2428 7.97456L44.7572 8.83205C46.1275 8.00987 46.845 6.85335 47.0331 5.64422C47.219 4.44919 46.8822 3.24203 46.2214 2.30306C45.5606 1.364 44.5509 0.659929 43.3616 0.523755C42.1587 0.386024 40.8577 0.83857 39.6464 2.04978L40.3536 2.75689ZM44.9 8.1033L40.4 2.10333L39.6 2.70333L44.1 8.70331L44.9 8.1033ZM38.4273 3.1181L20.6773 18.1181L21.3227 18.8819L39.0727 3.8819L38.4273 3.1181ZM41.4 6.2L39.15 3.2L38.35 3.8L40.6 6.8L41.4 6.2ZM43.65 9.2L41.4 6.2L40.6 6.8L42.85 9.8L43.65 9.2ZM25.8348 25.8714L43.5848 9.87139L42.9152 9.12861L25.1652 25.1286L25.8348 25.8714ZM18.5762 27.1609L25.5822 25.9932L25.4178 25.0068L18.4118 26.1745L18.5762 27.1609ZM17.004 24.9794C16.4229 26.0771 17.3512 27.365 18.5762 27.1609L18.4118 26.1745C18.0035 26.2425 17.694 25.8132 17.8878 25.4473L17.004 24.9794ZM20.5581 18.2661L17.004 24.9794L17.8878 25.4473L21.4419 18.7339L20.5581 18.2661ZM5 5.5C2.51472 5.5 0.5 7.51472 0.5 10H1.5C1.5 8.067 3.067 6.5 5 6.5V5.5ZM25 5.5H5V6.5H25V5.5ZM27.5 8C27.5 6.61929 26.3807 5.5 25 5.5V6.5C25.8284 6.5 26.5 7.17157 26.5 8H27.5ZM25 10.5C26.3807 10.5 27.5 9.38071 27.5 8H26.5C26.5 8.82843 25.8284 9.5 25 9.5V10.5ZM5 10.5H25V9.5H5V10.5ZM5.5 38.5V10H4.5V38.5H5.5ZM35 38H5V39H35V38ZM34.5 23.5V38.5H35.5V23.5H34.5ZM37 21C35.6193 21 34.5 22.1193 34.5 23.5H35.5C35.5 22.6716 36.1716 22 37 22V21ZM39.5 23.5C39.5 22.1193 38.3807 21 37 21V22C37.8284 22 38.5 22.6716 38.5 23.5H39.5ZM39.5 38.5V23.5H38.5V38.5H39.5ZM35 43C37.4853 43 39.5 40.9853 39.5 38.5H38.5C38.5 40.433 36.933 42 35 42V43ZM5 43H35V42H5V43ZM0.5 38.5C0.5 40.9853 2.51472 43 5 43V42C3.067 42 1.5 40.433 1.5 38.5H0.5ZM0.5 10V38.5H1.5V10H0.5Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="plugins-tab-section">
                                <h3 class="section-header"><?php echo __( 'Our Plugins', 'cm-enterprise' ); ?></h3>
                                <div class="plugins__wrapper">
                                    <div class="plugins__card">
                                        <div class="plugins__card-img">
                                            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/zoom.png' ) ); ?>"
                                                 alt="<?php echo __( 'Video Conferencing with Zoom', 'cm-enterprise' ); ?>">
                                            <p class="free"><?php echo __( 'Free', 'cm-enterprise' ); ?></p>
                                        </div>
                                        <h4 class="plugin-title"><?php echo __( 'Video Conferencing
                                        with Zomm', 'cm-enterprise' ); ?></h4>
                                        <p class="desc"><?php echo __( 'Video Conferencing with zoom
                                        free version', 'cm-enterprise' ); ?></p>
				                        <?php
				                        $ThemeSetting
					                        = ThemeSetting::get_instance();
				                        $plugin_slug
					                        = 'video-conferencing-with-zoom-api';
				                        $plugin_file
					                        = $ThemeSetting->codemanas_get_plugin_file( $plugin_slug );

				                        if ( is_plugin_active( $plugin_file ) ) {
					                        $button_classes
						                                 = 'button activated install-plugin';
					                        $button_text = __( 'Activated',
						                        'cm-enterprise' );
				                        } else {
					                        $button_classes
						                                 = 'button install install-plugin';
					                        $button_text = __( 'Install',
						                        'cm-enterprise' );
				                        }
				                        ?>
                                        <button class="<?php echo esc_attr( $button_classes ); ?>"
                                                data-plugin-slug="<?php echo esc_attr( $plugin_slug ); ?>"
                                                data-file-name="video-conferencing-with-zoom-api"><?php echo esc_html( $button_text ); ?></button>
                                    </div>

                                    <div class="plugins__card">
                                        <div class="plugins__card-img">
                                            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/typesense.png' ) ); ?>"
                                                 alt="<?php echo __( 'Search with Typesense', 'cm-enterprise' ); ?>">
                                            <p class="free"><?php echo __( 'Free', 'cm-enterprise' ); ?></p>
                                        </div>
                                        <h4 class="plugin-title"><?php echo __( 'Search With
                                        Typesense', 'cm-enterprise' ); ?></h4>
                                        <p class="desc"><?php echo __( 'Instant Search with
                                        Typesense Free version', 'cm-enterprise' ); ?></p>
				                        <?php
				                        $ThemeSetting
					                                 = ThemeSetting::get_instance();
				                        $plugin_slug = 'search-with-typesense';
				                        $plugin_file
					                                 = $ThemeSetting->codemanas_get_plugin_file( $plugin_slug );

				                        if ( is_plugin_active( $plugin_file ) ) {
					                        $button_classes
						                                 = 'button activated install-plugin';
					                        $button_text = __( 'Activated',
						                        'cm-enterprise' );
				                        } else {
					                        $button_classes
						                                 = 'button install install-plugin';
					                        $button_text = __( 'Install',
						                        'cm-enterprise' );
				                        }
				                        ?>
                                        <button class="<?php echo esc_attr( $button_classes ); ?>"
                                                data-plugin-slug="<?php echo esc_attr( $plugin_slug ); ?>"
                                                data-file-name='codemanas-typesense'><?php echo esc_html( $button_text ); ?></button>
                                    </div>

                                    <div class="plugins__card">
                                        <div class="plugins__card-img">
                                            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/popup.png' ) ); ?>"
                                                 alt="<?php echo __( 'Simple Popup Block', 'cm-enterprise' ); ?>">
                                            <p class="free"><?php echo __( 'Free', 'cm-enterprise' ); ?></p>
                                        </div>
                                        <h4 class="plugin-title"><?php echo __( 'Simple Popup
                                        Block', 'cm-enterprise' ); ?></h4>
                                        <p class="desc"><?php echo __( 'A simple and easy to use
                                        popup block plugin for block editor', 'cm-enterprise' ); ?></p>
				                        <?php
				                        $ThemeSetting
					                                 = ThemeSetting::get_instance();
				                        $plugin_slug = 'simple-popup-block';
				                        $plugin_file
					                                 = $ThemeSetting->codemanas_get_plugin_file( $plugin_slug );

				                        if ( is_plugin_active( $plugin_file ) ) {
					                        $button_classes
						                                 = 'button activated install-plugin';
					                        $button_text = __( 'Activated',
						                        'cm-enterprise' );
				                        } else {
					                        $button_classes
						                                 = 'button install install-plugin';
					                        $button_text = __( 'Install',
						                        'cm-enterprise' );
				                        }
				                        ?>
                                        <button class="<?php echo esc_attr( $button_classes ); ?>"
                                                data-plugin-slug="<?php echo esc_attr( $plugin_slug ); ?>"
                                                data-file-name="simple-popup-block"><?php echo esc_html( $button_text ); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cm-admin__sidebar">
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Help and Support', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'No Problem!! Please create a support ticket. Our dedicated support team will help you to solve your problem.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <a href="<?php echo esc_url('https://wordpress.org/support/theme/cm-enterprise/')?>" class="button" target="_blank"><?php echo __( 'Support', 'cm-enterprise' ); ?></a>
                                </div>
                            </div>
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Documentation', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'From Edit screen of page/post, you can easily import Beautiful Patterns.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <a href="<?php echo esc_url('https://docs.cmblocks.com/')?>" class="button" target="_blank"><?php echo __( 'Documentation', 'cm-enterprise' ); ?></a>
                                </div>
                            </div>
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Leave a Review', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'From Edit screen of page/post, you can easily import Beautiful Patterns.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <a href="<?php echo esc_url('https://wordpress.org/support/theme/cm-enterprise/reviews/')?>" class="button" target="_blank"><?php echo __( 'Review', 'cm-enterprise' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-panel" data-tab="tab2">
                        <div class="change-log__wrapper">
			                <?php
			                $readmePath  = get_template_directory() . '/readme.txt';
			                $fileContent = file_get_contents( $readmePath );
			                $startPos    = strpos( $fileContent, '== Changelog ==' );
			                $endPos      = strpos( $fileContent, '==',
				                $startPos + strlen( '== Changelog ==' ) );

			                if ( $startPos !== false && $endPos !== false ) {
				                $changelog = substr( $fileContent, $startPos, $endPos - $startPos );
				                $entries   = explode( PHP_EOL, $changelog );
				                foreach ( $entries as $entry ) {
					                $trimmedEntry = trim( $entry );
					                if ( strpos( $trimmedEntry, '==' ) !== 0
					                ) {
						                echo '<p>' . $trimmedEntry . '</p>';
					                }
				                }
			                } else {
				                echo 'Changelog section not found';
			                }
			                ?>
                        </div>
                        <div class="cm-admin__sidebar">
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Help and Support', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'No Problem!! Please create a support ticket. Our dedicated support team will help you to solve your problem.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <button class="button"><?php echo __( 'Support', 'cm-enterprise' ); ?></button>
                                </div>
                            </div>
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Documentation', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'From Edit screen of page/post, you can easily import Beautiful Patterns.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <button class="button"><?php echo __( 'Documentation', 'cm-enterprise' ); ?></button>
                                </div>
                            </div>
                            <div class="cm-admin__sidebar-cards">
                                <h4><?php echo __( 'Leave a Review', 'cm-enterprise' ); ?></h4>
                                <p class="desc"><?php echo __( 'From Edit screen of page/post, you can easily import Beautiful Patterns.', 'cm-enterprise' ); ?></p>
                                <div class="cards-btn">
                                    <button class="button"><?php echo __( 'Review', 'cm-enterprise' ); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-panel" data-tab="tab3">
                        <div class="tab-section">
                            <div class="tab-section-cmBLocks">
                                <div class="tab-section-cmBLocks__wrapper">
                                    <div class="quick-setting__wrapper quick-setting__wrapper--design-library">
                                        <div class="cm-theme-admin-design-library__preview-image">
                                            <img src="<?php echo esc_url( $design_library ); ?>">
                                        </div>
                                        <div class="cm-theme-admin-design-library-tab__section">
                                            <h2><?php echo __( '" Craft Your Distinctive Web Presence with Our Design Library "', 'cm-enterprise' ); ?></h2>
                                            <p class="cm-theme-admin-card-item__desc"><?php echo __( "Explore our extensive collection of expertly crafted patterns and page designs. Choose from a variety of options to create your site exactly as you envision it.", 'cm-enterprise' ); ?></p>
                                            <p class="cm-theme-admin-card-item__desc"><?php echo __( 'With just a few clicks, easily create beautiful sections anywhere on your site.', 'cm-enterprise' ); ?></p>
                                            <a href="<?php echo esc_url('https://cmblocks.com/cm-blocks-design-library-v1-2-0/') ?>" target="_blank" class="body-btn-primary"><?php echo __( 'Learn More', 'cm-enterprise' ); ?></a>
                                        </div>
                                    </div>
                                    <h2><?php echo __( 'Our Blocks', 'cm-enterprise' ); ?></h2>
                                    <div class="quick-setting__wrapper">
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $slider_icon ) ?>" alt="<?php echo __( 'Slider Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Slider', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Create Smooth and interactive user interface.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/slider/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/cm-blocks/slider#slider-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $accordion_icon ) ?>" alt="<?php echo __( 'Accordion Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Accordion', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Easy Accordion which enhance user experience and make site organized.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/accordion/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/accordion/#accordion-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $masonry_icon ) ?>" alt="<?php echo __( 'Masonry Gallery Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Masonry Gallery', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Simple grid based gallery inside WordPress content editor.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/masonry-gallery/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/masonry-gallery/#masonry-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $progressBar_icon ) ?>" alt="<?php echo __( 'Progress Bar Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Progress Bar', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Beautiful slider bar without writing long lines of code on WordPress.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/progress-bar/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/progress-bar/#progressBar-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $countdown_icon ) ?>" alt="<?php echo __( 'Countdown Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Countdown', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Customizable WordPress blocks that allows user to add timer inside.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/countdown/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/cm-blocks/countdown-2/#countdown-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cm-theme-admin-card-item">
                                            <img src="<?php echo esc_url( $counter_icon ) ?>" alt="<?php echo __( 'Counter Icon', 'cm-enterprise' ); ?>">
                                            <div class="cm-theme-admin-card-item__info">
                                                <h5 class="cm-theme-admin-card-item__title"><?php echo __( 'Counter', 'cm-enterprise' ); ?></h5>
                                                <p class="cm-theme-admin-card-item__desc"><?php echo __( 'Create beautiful Counters without writing a bunch of code.', 'cm-enterprise' ); ?></p>
                                                <div class="cm-theme-admin-card-item-btn__wrapper">
                                                    <a class="body-btn-primary" href="<?php echo esc_url('https://docs.cmblocks.com/counter/') ?>" target="_blank"><?php echo __( 'Docs', 'cm-enterprise' ); ?></a>
                                                    <a class="cm-theme-admin-btn-secondary" href="<?php echo esc_url('https://cmblocks.com/counter/#counter-demo') ?>" target="_blank"><?php echo __( 'Live Demo', 'cm-enterprise' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cm-admin-tab__wrapper">
                                    <a href="<?php echo esc_url('https://cmblocks.com/pricing/') ?>" class="cm-admin-designLibrary__pro" target="_blank">
                                        <h2><?php echo __( 'Elevate your design with CM Blocks Suite.', 'cm-enterprise' ); ?></h2>
                                        <p class="cm-admin-card-item__desc">
							                <?php echo __( "Unlock Premium Designs and access a collection of unique, high-quality templates that will make your site stand out. With dedicated priority support, you'll have everything you need to create exceptional websites effortlessly. Elevate your design capabilities today with our Premium Designs!", 'cm-enterprise' ); ?>
                                        </p>
                                        <button class="body-btn-primary"><?php echo __( 'Get Started Now', 'cm-enterprise' ); ?></button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
