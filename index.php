<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header">
        <div class="container">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            
            <nav class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
    </header>

    <main class="journey-map">
        <div class="container">
            <section class="journey-stages">
                <div class="journey-stage">
                    <div class="stage-number">1</div>
                    <h2 class="stage-title">Awareness</h2>
                    <p class="stage-description">User becomes aware of a need or problem they want to solve.</p>
                    <ul class="stage-actions">
                        <li>Research problem online</li>
                        <li>Ask friends for recommendations</li>
                        <li>Browse social media</li>
                        <li>Read reviews and articles</li>
                    </ul>
                </div>

                <div class="journey-stage">
                    <div class="stage-number">2</div>
                    <h2 class="stage-title">Consideration</h2>
                    <p class="stage-description">User evaluates different options and solutions available.</p>
                    <ul class="stage-actions">
                        <li>Compare different products</li>
                        <li>Read detailed reviews</li>
                        <li>Visit company websites</li>
                        <li>Request demos or trials</li>
                    </ul>
                </div>

                <div class="journey-stage">
                    <div class="stage-number">3</div>
                    <h2 class="stage-title">Decision</h2>
                    <p class="stage-description">User makes a decision and takes action to purchase or engage.</p>
                    <ul class="stage-actions">
                        <li>Final price comparison</li>
                        <li>Check return policy</li>
                        <li>Make purchase decision</li>
                        <li>Complete transaction</li>
                    </ul>
                </div>

                <div class="journey-stage">
                    <div class="stage-number">4</div>
                    <h2 class="stage-title">Experience</h2>
                    <p class="stage-description">User experiences the product or service after purchase.</p>
                    <ul class="stage-actions">
                        <li>Onboarding process</li>
                        <li>First use experience</li>
                        <li>Learning how to use</li>
                        <li>Getting support when needed</li>
                    </ul>
                </div>

                <div class="journey-stage">
                    <div class="stage-number">5</div>
                    <h2 class="stage-title">Advocacy</h2>
                    <p class="stage-description">User becomes satisfied and recommends to others.</p>
                    <ul class="stage-actions">
                        <li>Leave positive reviews</li>
                        <li>Recommend to friends</li>
                        <li>Share on social media</li>
                        <li>Become repeat customer</li>
                    </ul>
                </div>

            </section>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Built from Figma User Journey Map Template.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
