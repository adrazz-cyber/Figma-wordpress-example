<div class="user-journey-map-container">
    <div class="journey-container">
        <!-- Header -->
        <div class="journey-header">
            <h1 class="journey-title"><?php echo esc_html($atts['title']); ?></h1>
            <p class="journey-subtitle"><?php echo esc_html($atts['subtitle']); ?></p>
            
            <!-- Theme Toggle -->
            <div class="theme-toggle">
                <button class="theme-btn active" data-theme="both">Both Themes</button>
                <button class="theme-btn" data-theme="light">Light Mode</button>
                <button class="theme-btn" data-theme="dark">Dark Mode</button>
            </div>
        </div>
        
        <!-- Dual Journey Maps -->
        <div class="maps-container" id="mapsContainer">
            <!-- Light Theme Journey Map -->
            <div class="journey-map light-theme" id="lightMap">
                <div class="map-header">
                    <h2 class="map-title">User's Journey Map</h2>
                    <p class="map-subtitle">Light Theme Experience</p>
                </div>
                
                <!-- Stage Headers -->
                <div class="stages-header">
                    <div class="stage-header">Need</div>
                    <div class="stage-header">Search</div>
                    <div class="stage-header">Find</div>
                    <div class="stage-header">Hire</div>
                    <div class="stage-header">Work</div>
                    <div class="stage-header">Payment</div>
                </div>
                
                <!-- Emotional Journey Line -->
                <div class="emotion-line-container">
                    <svg class="emotion-line" viewBox="0 0 400 120">
                        <path class="journey-line" d="M 30 80 Q 80 40 130 60 Q 180 80 230 30 Q 280 50 330 70 Q 370 60 390 40"/>
                    </svg>
                    <div class="stage-dot happy" style="left: 5%; top: 60%" data-emotion="happy"></div>
                    <div class="stage-dot neutral" style="left: 22%; top: 40%" data-emotion="neutral"></div>
                    <div class="stage-dot happy" style="left: 39%; top: 20%" data-emotion="happy"></div>
                    <div class="stage-dot neutral" style="left: 56%; top: 35%" data-emotion="neutral"></div>
                    <div class="stage-dot happy" style="left: 73%; top: 45%" data-emotion="happy"></div>
                    <div class="stage-dot happy" style="left: 90%; top: 25%" data-emotion="happy"></div>
                </div>
                
                <!-- Stage Details -->
                <div class="stages-details">
                    <div class="stage-detail">
                        <h3 class="stage-title">Need</h3>
                        <p class="stage-description">User identifies a problem or requirement that needs to be addressed.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Experiences about the problem</div>
                            <div class="stage-action">• Searches validation</div>
                            <div class="stage-action">• Reads about online</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Search</h3>
                        <p class="stage-description">Actively looking for solutions and comparing different options.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Researches online solutions</div>
                            <div class="stage-action">• Compares different providers</div>
                            <div class="stage-action">• Reads reviews and testimonials</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Find</h3>
                        <p class="stage-description">Discovers potential solutions that match their requirements.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Evaluates service offerings</div>
                            <div class="stage-action">• Checks pricing and packages</div>
                            <div class="stage-action">• Reviews portfolio examples</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Hire</h3>
                        <p class="stage-description">Makes the decision to engage with the service provider.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Initial consultation</div>
                            <div class="stage-action">• Project requirements discussion</div>
                            <div class="stage-action">• Contract and timeline agreement</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Work</h3>
                        <p class="stage-description">Collaborates during the service delivery process.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Regular progress updates</div>
                            <div class="stage-action">• Feedback and revisions</div>
                            <div class="stage-action">• Quality assurance testing</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Payment</h3>
                        <p class="stage-description">Completes the transaction and evaluates the experience.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Project delivery confirmation</div>
                            <div class="stage-action">• Final payment processing</div>
                            <div class="stage-action">• Post-project support</div>
                        </div>
                    </div>
                </div>
                
                <!-- Experience Levels -->
                <div class="experience-levels">
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #10b981;"></div>
                        <span>Happy</span>
                    </div>
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #6b7280;"></div>
                        <span>Neutral</span>
                    </div>
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #ef4444;"></div>
                        <span>Unhappy</span>
                    </div>
                </div>
            </div>
            
            <!-- Dark Theme Journey Map -->
            <div class="journey-map dark-theme" id="darkMap">
                <div class="map-header">
                    <h2 class="map-title">User's Journey Map</h2>
                    <p class="map-subtitle">Dark Theme Experience</p>
                </div>
                
                <!-- Stage Headers -->
                <div class="stages-header">
                    <div class="stage-header">Need</div>
                    <div class="stage-header">Search</div>
                    <div class="stage-header">Find</div>
                    <div class="stage-header">Hire</div>
                    <div class="stage-header">Work</div>
                    <div class="stage-header">Payment</div>
                </div>
                
                <!-- Emotional Journey Line -->
                <div class="emotion-line-container">
                    <svg class="emotion-line" viewBox="0 0 400 120">
                        <path class="journey-line" d="M 30 70 Q 80 90 130 50 Q 180 30 230 60 Q 280 80 330 40 Q 370 20 390 35" stroke="#60a5fa"/>
                    </svg>
                    <div class="stage-dot neutral" style="left: 5%; top: 50%" data-emotion="neutral"></div>
                    <div class="stage-dot unhappy" style="left: 22%; top: 70%" data-emotion="unhappy"></div>
                    <div class="stage-dot happy" style="left: 39%; top: 30%" data-emotion="happy"></div>
                    <div class="stage-dot happy" style="left: 56%; top: 45%" data-emotion="happy"></div>
                    <div class="stage-dot neutral" style="left: 73%; top: 25%" data-emotion="neutral"></div>
                    <div class="stage-dot happy" style="left: 90%; top: 20%" data-emotion="happy"></div>
                </div>
                
                <!-- Stage Details -->
                <div class="stages-details">
                    <div class="stage-detail">
                        <h3 class="stage-title">Need</h3>
                        <p class="stage-description">User identifies a problem in a dark interface environment.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Dark mode preferences</div>
                            <div class="stage-action">• Reduced eye strain needs</div>
                            <div class="stage-action">• Professional appearance</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Search</h3>
                        <p class="stage-description">Looks for solutions that support dark themes.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Theme compatibility</div>
                            <div class="stage-action">• Accessibility concerns</div>
                            <div class="stage-action">• Brand consistency</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Find</h3>
                        <p class="stage-description">Discovers solutions with excellent dark mode support.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Evaluates dark theme quality</div>
                            <div class="stage-action">• Tests readability</div>
                            <div class="stage-action">• Checks contrast ratios</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Hire</h3>
                        <p class="stage-description">Chooses providers who understand dark theme principles.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Design system expertise</div>
                            <div class="stage-action">• Dark theme portfolio</div>
                            <div class="stage-action">• Accessibility knowledge</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Work</h3>
                        <p class="stage-description">Collaborates on implementing dark theme solutions.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Theme switching functionality</div>
                            <div class="stage-action">• Consistent colour schemes</div>
                            <div class="stage-action">• User preference storage</div>
                        </div>
                    </div>
                    
                    <div class="stage-detail">
                        <h3 class="stage-title">Payment</h3>
                        <p class="stage-description">Completes transaction with satisfaction.</p>
                        <div class="stage-actions">
                            <div class="stage-action">• Seamless payment flow</div>
                            <div class="stage-action">• Professional appearance</div>
                            <div class="stage-action">• Consistent theming</div>
                        </div>
                    </div>
                </div>
                
                <!-- Experience Levels -->
                <div class="experience-levels">
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #10b981;"></div>
                        <span>Happy</span>
                    </div>
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #6b7280;"></div>
                        <span>Neutral</span>
                    </div>
                    <div class="experience-level">
                        <div class="experience-icon" style="background: #ef4444;"></div>
                        <span>Unhappy</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Support Section -->
        <div class="support-section">
            <p class="support-message">Professional User Journey Map Template</p>
            <a href="#" class="support-cta">Learn More About Our Services</a>
        </div>
    </div>
</div>
