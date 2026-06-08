<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Computer Engineering & Finance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="hero-section">
        <nav>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero-content">
            <h1>Dev Chhaya</h1>
            <h2>Computer Engineering Graduate</h2>
            <p class="tagline">Leveraging engineering rigor and data science to break into Quantitative Finance, M&A, and PE/VC analysis.</p>
            
            <div class="social-links">
                <a href="https://linkedin.com/in/YOUR-PROFILE" target="_blank" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://github.com/devc2255" target="_blank" aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section id="about" class="container">
            <h2 class="section-title">Professional Summary</h2>
            <div class="about-card">
                <p>I am a Computer Engineering graduate equipped with a strong mathematical foundation and deep technical expertise, actively transitioning into the finance sector. My background blends robust full-stack software development with advanced data science capabilities, highlighted by my tenure as an intern at New Era Consultancy Services. I build custom analytical architectures, financial modeling engines, and machine learning pipelines designed to extract intelligence from complex datasets and support high-stakes investment decisions.</p>
            </div>
        </section>

        <section id="projects" class="container">
            <h2 class="section-title">Featured Engineering & Finance Projects</h2>
            <div class="project-grid">
                
                <div class="project-card">
                    <div class="project-content">
                        <div class="badge">Finance & Tech</div>
                        <h3>Investment Decision Support System</h3>
                        <span class="tech-stack">Python • Financial Modeling • Data Integration</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-tall">
                                <img src="investment-1.jpeg" alt="Originate Deal Pipeline" class="slide active">
                                <img src="investment-2.jpeg" alt="Target Selection Analyst Screening" class="slide">
                                <img src="investment-3.jpeg" alt="Bearish Signal Analysis" class="slide">
                                <img src="investment-4.jpeg" alt="Bullish Signal Analysis" class="slide">
                                <img src="investment-5.jpeg" alt="Portfolio Overview" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>The Investment Decision Support System is a real-time financial intelligence dashboard designed to streamline equity research and market analysis. By combining live market data aggregation from the Finnhub API with natural language processing via FinBERT, the platform quantifies financial news sentiment to surface actionable market insights. Built entirely in Python using Streamlit, it provides investors and analysts with a centralized, interactive interface for monitoring equity trends, evaluating risk metrics, and leveraging sentiment tracking to back up investment theses.</p>
                    
                        <a href="https://huggingface.co/spaces/5axe32/Investment-Decision-Support-System" target="_blank" class="live-link-btn">
                            View Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="badge">Finance & Quantitative Analysis</div>
                        <h3>Institutional Intrinsic Valuation Engine</h3>
                        <span class="tech-stack">Python • DCF Modeling • Financial Derivatives</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-tall">
                                <img src="valuation-1.jpeg" alt="Valuation Dashboard" class="slide active">
                                <img src="valuation-2.jpeg" alt="DCF Analysis Interface" class="slide">
                                <img src="valuation-3.jpeg" alt="Sensitivity Analysis" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>Developed to streamline advanced equity research, this Institutional Intrinsic Valuation Engine is a comprehensive, Python-based toolkit for multi-stage Discounted Cash Flow (DCF) analysis. The pipeline integrates live market data to automatically build 5-year operating forecasts, calculate dynamic WACC, and execute rigorous sensitivity analyses. Accessible via a terminal pipeline or a live Streamlit dashboard, it provides a highly interactive suite for evaluating intrinsic value, complete with a reverse-DCF module to stress-test market-implied growth rates.</p>
                            
                        <a href="https://institutional-intrinsic-valuation-engine.onrender.com/" target="_blank" class="live-link-btn">
                            View Live Engine <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a> 
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="badge">Internship: New Era Consultancy</div>
                        <h3>Financial Dashboard & PHP Contact Form using RESEND API</h3>
                        <span class="tech-stack">Power BI • DAX • Render • Full-Stack Web</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-wide">
                                <img src="contact-form.png" alt="Contact Form UI" class="slide active">
                                <img src="powerbi-1.jpg" alt="Dashboard Overview" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>This repository serves as a practical backend development environment built with PHP 8.2 and Apache. It centers around a fully functional contact form API that securely handles email delivery using the Resend API and cURL, complete with robust server-side validation. To ensure seamless scaling and testing, the application is containerized with Docker. Alongside the core backend architecture, the project also hosts embedded data visualization assets, including Power BI dashboard reports. The live application is currently deployed and accessible via Render.</p>
                        
                        <a href="https://intel-flow-tech.onrender.com" target="_blank" class="live-link-btn">
                            View Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="badge">Enterprise Software</div>
                        <h3>Core Inventory Management Engine</h3>
                        <span class="tech-stack">Odoo Framework • Python • PostgreSQL</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-tall">
                                <img src="odoo-1.jpeg" alt="Admin Manager Dashboard" class="slide active">
                                <img src="odoo-2.jpeg" alt="Products Catalog" class="slide">
                                <img src="odoo-3.jpeg" alt="Locations & Partners" class="slide">
                                <img src="odoo-4.jpeg" alt="System Profile" class="slide">
                                <img src="odoo-5.jpeg" alt="Warehouse Staff Dashboard" class="slide">
                                <img src="odoo-6.jpeg" alt="Project Structure" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>Developed for the Odoo Hackathon, the Core Inventory System is a full-stack, lightweight warehouse management application. It handles the end-to-end inventory lifecycle, from product cataloging and SKU validation to tracking receipts, deliveries, and stock adjustments. Engineered with role-aware user flows (Manager vs. Warehouse Staff) and comprehensive audit logging, the system provides a secure, real-time view of asset values and stock movements. It is built with Python and Flask, utilizing Jinja2 templates for the frontend and a Neon PostgreSQL database for reliable data storage.</p>
                            
                        <a href="https://core-inventory-system-rpi1.onrender.com" target="_blank" class="live-link-btn">
                            View Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a> 
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="badge">Internship : BrainyBeam Info Tech Pvt. Ltd.</div>
                        <h3>Automatic Cyberbullying Tweet Detector</h3>
                        <span class="tech-stack">Python 3.14.2 • XGBoost • NLP • Streamlit</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-wide">
                                <img src="cyberbullying-1.png" alt="Dashboard Input" class="slide active">
                                <img src="cyberbullying-2.png" alt="Prediction Class Probabilities" class="slide">
                                <img src="cyberbullying-3.png" alt="Model Metrics" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>This repository features a machine learning web application designed to detect and categorize cyberbullying in text. Leveraging Natural Language Processing (NLP) techniques, the pipeline cleans tweet data, removes stop words, and lemmatizes tokens using NLTK before applying a TF-IDF vectorizer. Predictions are powered by an XGBoost classifier tuned to 83.52% accuracy and deployed via a Streamlit dashboard. The interactive interface allows users to input text and instantly view the predicted bullying category—such as gender, religion, age, or ethnicity—along with visualizations of the model's confidence metrics.</p>

                        <a href="https://cyber-bullying-tweet-detector-x6c4aydnnblz36aejhf24f.streamlit.app/" target="_blank" class="live-link-btn">
                            View Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

                <div class="project-card"> 
                    <div class="project-content">
                        <div class="badge">Data Science</div>
                        <h3>Comprehensive Data Science Portfolio</h3>
                        <span class="tech-stack">Statistical Modeling • Predictive Analytics</span>
                        
                        <div class="slider-container">
                            <div class="slides-wrapper ratio-tall">
                                <img src="datascience-1.jpeg" alt="Covid-19 Global Analysis Dashboard" class="slide active">
                                <img src="datascience-2.jpg" alt="Austin Weather Analysis Trends and Correlation" class="slide">
                                <img src="datascience-3.jpeg" alt="Tumor Detection Dataset Explorer" class="slide">
                            </div>
                            <button class="slider-btn prev-btn" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="slider-btn next-btn" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                            <div class="slider-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>

                        <p>This repository is a curated collection of end-to-end data science projects demonstrating practical skills in exploratory data analysis (EDA), predictive modeling, and machine learning. It features three core domains: time-series analysis of global COVID-19 trends, linear regression for weather forecasting, and classification models for tumor detection. The entire portfolio is unified into a single, interactive web application built with Streamlit, allowing users to seamlessly explore the data, adjust parameters, and view real-time performance metrics and visualizations.</p>

                        <a href="https://datascienceproject-orfwavf7cve3sqea66fcmc.streamlit.app/" target="_blank" class="live-link-btn">
                            View Live Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section id="skills" class="container">
            <h2 class="section-title">Core Competencies</h2>
            <div class="skills-grid">
                <div class="skills-category">
                    <h3>Corporate Finance & Valuation</h3>
                    <div class="skill-pills">
                        <span>DCF Modeling</span>
                        <span>CAPM Analysis</span>
                        <span>Cash Flow Analysis</span>
                        <span>Balance Sheet Breakdown</span>
                        <span>Risk Management</span>
                    </div>
                </div>
                <div class="skills-category">
                    <h3>Engineering & Intelligent Architectures</h3>
                    <div class="skill-pills">
                        <span>Python (3.14.2)</span>
                        <span>XGBoost & Random Forest</span>
                        <span>NLP & Hyperparameter Tuning</span>
                        <span>Power BI Dashboarding</span>
                        <span>HTML/CSS & Render Deployment</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="container">
            <h2 class="section-title">Connect & Collaborate</h2>
            <div class="contact-wrapper">
                <form id="portfolio-contact-form" class="contact-form">
                    <div class="input-group">
                        <input type="text" name="Subject" placeholder="Subject / Full Name" required>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-group">
                        <textarea name="textarea" rows="5" placeholder="Discuss recruitment, projects, or market analysis..." required></textarea>
                    </div>
                    <button type="submit" id="submit-btn" class="submit-btn">Send Message</button>
                    
                    <div id="form-status" style="display: none; margin-top: 1rem; padding: 1rem; border-radius: 8px; font-weight: 500; text-align: center;"></div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Dev Chhaya. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = document.querySelectorAll('.slider-container');

            sliders.forEach(slider => {
                const slides = slider.querySelectorAll('.slide');
                const dots = slider.querySelectorAll('.dot');
                const prevBtn = slider.querySelector('.prev-btn');
                const nextBtn = slider.querySelector('.next-btn');
                let currentIndex = 0;

                function updateSlider(index) {
                    slides.forEach(s => s.classList.remove('active'));
                    dots.forEach(d => d.classList.remove('active'));
                    
                    slides[index].classList.add('active');
                    dots[index].classList.add('active');
                }

                if (prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
                        updateSlider(currentIndex);
                    });

                    nextBtn.addEventListener('click', () => {
                        currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
                        updateSlider(currentIndex);
                    });
                }

                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentIndex = index;
                        updateSlider(currentIndex);
                    });
                });
            });
        });
    </script>

    <script>
        document.getElementById('portfolio-contact-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Stop the browser from leaving the page
            
            const form = this;
            const btn = document.getElementById('submit-btn');
            const statusDiv = document.getElementById('form-status');
            const formData = new FormData(form);

            // UI Feedback: Loading state
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
            btn.style.opacity = '0.7';
            btn.disabled = true;

            // Send data silently to your Render PHP script
            fetch('https://intel-flow-tech.onrender.com/contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Assuming it hits the PHP script and returns correctly
                form.reset();
                btn.innerHTML = 'Send Message';
                btn.style.opacity = '1';
                btn.disabled = false;
                
                statusDiv.innerHTML = 'Message sent successfully! I will get back to you soon.';
                statusDiv.style.backgroundColor = '#dcfce7'; // Light green
                statusDiv.style.color = '#166534'; // Dark green
                statusDiv.style.display = 'block';
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    statusDiv.style.display = 'none';
                }, 5000);
            })
            .catch(error => {
                btn.innerHTML = 'Send Message';
                btn.style.opacity = '1';
                btn.disabled = false;
                
                statusDiv.innerHTML = 'There was an issue connecting to the server. Please connect via LinkedIn.';
                statusDiv.style.backgroundColor = '#fee2e2'; // Light red
                statusDiv.style.color = '#991b1b'; // Dark red
                statusDiv.style.display = 'block';
            });
        });
    </script>
</body>
</html>
