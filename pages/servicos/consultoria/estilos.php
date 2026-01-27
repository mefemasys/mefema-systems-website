

<style>
/* 
   MEFEMA Systems - Consultoria Digital
   CSS com paleta Laranja & Castanho
*/

:root {
    /* Brand Colors - Light Mode */
    --primary-color: #d97638;
    --primary-dark: #c66b3d;
    --primary-light: #fef5ef;
    --secondary-color: #74523d;
    --secondary-dark: #2c1810;
    
    --text-primary: #2c1810;
    --text-secondary: #74523d;
    --bg-light: #fdfbf9;
    --bg-card: #ffffff;
    --border-color: #e8ddd4;
    
    --shadow-sm: 0 2px 8px rgba(116, 82, 61, 0.08);
    --shadow-md: 0 4px 16px rgba(116, 82, 61, 0.12);
    --shadow-lg: 0 8px 32px rgba(116, 82, 61, 0.16);
    
    --radius: 8px;
    --radius-lg: 11px;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

[data-bs-theme="dark"] {
    --primary-color: #ff8c4a;
    --primary-dark: #e07a3d;
    --primary-light: #2a1f1a;
    --secondary-color: #c4b5aa;
    --secondary-dark: #f5ebe3;
    
    --text-primary: #f5ebe3;
    --text-secondary: #c4b5aa;
    --bg-light: #1a1410;
    --bg-card: #241a15;
    --border-color: rgba(217, 118, 56, 0.15);
    
    --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.3);
    --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.4);
    --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.5);
}

body {
    color: var(--text-primary);
}

/* Service Boxes */
.service-box {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
}

.service-box:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.service-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.service-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.service-description {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-features li {
    padding: 0.5rem 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
}

.service-features i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    font-size: 1.1rem;
}

/* Process Timeline */
.process-timeline {
    position: relative;
    padding: 2rem 0;
}

.process-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--primary-color);
    transform: translateX(-50%);
    opacity: 0.2;
}

@media (max-width: 991px) {
    .process-timeline::before {
        left: 30px;
    }
}

.timeline-item {
    position: relative;
    margin-bottom: 4rem;
    display: flex;
    align-items: flex-start;
}

.timeline-item:nth-child(even) {
    flex-direction: row-reverse;
}

@media (max-width: 991px) {
    .timeline-item,
    .timeline-item:nth-child(even) {
        flex-direction: row;
    }
}

.timeline-marker {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
}

@media (max-width: 991px) {
    .timeline-marker {
        left: 30px;
    }
}

.timeline-number {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    box-shadow: var(--shadow-sm);
}

.timeline-content {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    width: calc(50% - 60px);
    margin-left: auto;
    transition: var(--transition);
}

.timeline-content:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-md);
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: 0;
    margin-right: auto;
}

@media (max-width: 991px) {
    .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
        width: calc(100% - 90px);
        margin-left: 90px;
        margin-right: 0;
    }
}

.timeline-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-light);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.timeline-icon i {
    font-size: 28px;
    color: var(--primary-color);
}

.timeline-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.timeline-description {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.timeline-details h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.timeline-details ul {
    list-style: none;
    padding: 0;
    margin-bottom: 1.5rem;
}

.timeline-details ul li {
    padding: 0.5rem 0;
    display: flex;
    align-items: flex-start;
    color: var(--text-secondary);
}

.timeline-details ul li i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    margin-top: 0.25rem;
    font-size: 1.1rem;
}

.deliverables {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.deliverables .badge {
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
    font-weight: 600;
    background-color: var(--primary-light) !important;
    color: var(--primary-color) !important;
    border: 1px solid var(--border-color);
}

/* Expertise Cards */
.expertise-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.expertise-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.expertise-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.expertise-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.expertise-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.expertise-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
    font-size: 0.95rem;
}

/* Sector Badges */
.sector-badge {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 1.5rem 1rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
}

.sector-badge:hover {
    border-color: var(--primary-color);
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
}

.sector-badge i {
    font-size: 2rem;
    color: var(--primary-color);
}

.sector-badge span {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-primary);
}

/* Benefit Cards */
.benefit-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.benefit-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.benefit-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.benefit-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.benefit-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

/* Case Study Cards */
.case-study-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    overflow: hidden;
    transition: var(--transition);
    height: 100%;
}

.case-study-card:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.case-header {
    background: var(--primary-light);
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    border-bottom: 2px solid var(--border-color);
}

.case-icon {
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.case-icon i {
    font-size: 28px;
    color: var(--primary-color);
}

.case-header h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    color: var(--text-primary);
}

.case-sector {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
}

.case-body {
    padding: 2rem;
}

.case-body h5 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.case-body h5:first-child {
    margin-top: 0;
}

.case-body p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 1rem;
}

.case-results {
    list-style: none;
    padding: 0;
    margin: 0;
}

.case-results li {
    padding: 0.5rem 0;
    color: var(--text-secondary);
    display: flex;
    align-items: flex-start;
}

.case-results i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    margin-top: 0.25rem;
    font-size: 1.1rem;
}

.case-results strong {
    color: var(--primary-color);
    font-weight: 700;
}

/* Accordion Customization */
.accordion-item {
    border: none;
    margin-bottom: 1rem;
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    background: var(--bg-card);
}

.accordion-button {
    background: var(--bg-card);
    color: var(--text-primary);
    font-weight: 600;
    padding: 1.5rem;
    font-size: 1.1rem;
}

.accordion-button:not(.collapsed) {
    background: var(--primary-color);
    color: white;
}

.accordion-button:focus {
    box-shadow: none;
}

.accordion-body {
    padding: 1.5rem;
    color: var(--text-secondary);
    line-height: 1.8;
}

/* CTA Section & Buttons */
.bg-gradient-primary {
    background: var(--primary-color) !important;
}

.btn-primary {
    background-color: var(--primary-color) !important;
    border-color: var(--primary-color) !important;
    color: white !important;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-primary:hover {
    background-color: var(--primary-dark) !important;
    border-color: var(--primary-dark) !important;
    transform: translateY(-2px);
}

.btn-outline-primary {
    background: transparent !important;
    border: 2px solid var(--primary-color) !important;
    color: var(--primary-color) !important;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-outline-primary:hover {
    background-color: var(--primary-color) !important;
    color: white !important;
    transform: translateY(-2px);
}

/* Dark mode specific for CTA */
[data-bs-theme="dark"] .bg-gradient-primary .btn-light {
    background-color: white !important;
    color: var(--primary-color) !important;
    border-color: white !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-light:hover {
    background-color: var(--bg-card) !important;
    color: var(--primary-color) !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-outline-light {
    border-color: white !important;
    color: white !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-outline-light:hover {
    background-color: white !important;
    color: var(--primary-color) !important;
}

/* Utility Classes */
.text-gradient {
    background: none;
    -webkit-background-clip: initial;
    -webkit-text-fill-color: initial;
    color: var(--primary-color);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 700px;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .case-header {
        flex-direction: column;
        text-align: center;
    }
    
    .sector-badge {
        padding: 1rem 0.75rem;
    }
    
    .sector-badge i {
        font-size: 1.5rem;
    }
    
    .sector-badge span {
        font-size: 0.8rem;
    }
}

/* Additional responsive adjustments */
@media (max-width: 576px) {
    .timeline-number {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
    
    .timeline-icon {
        width: 50px;
        height: 50px;
    }
    
    .timeline-icon i {
        font-size: 24px;
    }
    
    .service-icon,
    .expertise-icon,
    .benefit-icon {
        width: 60px;
        height: 60px;
    }
    
    .service-icon i,
    .expertise-icon i,
    .benefit-icon i {
        font-size: 28px;
    }
}

/* Smooth scrolling for anchor links */
html {
    scroll-behavior: smooth;
}

/* Focus states for accessibility */
.service-box:focus-within,
.expertise-card:focus-within,
.benefit-card:focus-within,
.case-study-card:focus-within {
    outline: 2px solid var(--primary-color);
    outline-offset: 2px;
}

/* Print styles */
@media print {
    .process-timeline::before {
        display: none;
    }
    
    .timeline-marker {
        position: relative;
        left: 0;
        transform: none;
    }
    
    .timeline-content {
        width: 100%;
        margin: 0 !important;
        page-break-inside: avoid;
    }
}

/* Animation delays for sequential appearance */
[data-aos] {
    pointer-events: none;
}

[data-aos].aos-animate {
    pointer-events: auto;
}

/* Ensure proper contrast in all themes */
@media (prefers-contrast: high) {
    .service-box,
    .expertise-card,
    .benefit-card,
    .case-study-card {
        border-width: 2px;
    }
    
    .timeline-number,
    .service-icon i,
    .expertise-icon i,
    .benefit-icon i {
        font-weight: 700;
    }
}
</style>
