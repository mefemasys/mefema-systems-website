
<style>
/* 
   MEFEMA Systems - Formação Corporativa
   CSS utilizando a mesma paleta laranja e castanho
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
    background-color: transparent;
}

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

.philosophy-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.philosophy-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.philosophy-icon {
    width: 80px;
    height: 80px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.philosophy-icon i {
    font-size: 36px;
    color: var(--primary-color);
}

.philosophy-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.philosophy-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

.mefema-values-box {
    background: var(--bg-card);
    border-radius: var(--radius-lg);
    padding: 3rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border-color);
}

.mefema-values-box h3 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
}

.value-item {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding: 1.5rem;
    background: var(--bg-light);
    border-radius: var(--radius);
    transition: var(--transition);
}

.value-item:hover {
    background: var(--primary-light);
    transform: translateX(5px);
}

.value-letter {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.75rem;
    font-weight: 700;
    flex-shrink: 0;
}

.value-content h5 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
}

.value-content p {
    color: var(--text-secondary);
    margin: 0;
    line-height: 1.6;
}

.tech-category {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    height: 100%;
}

.tech-category h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--text-primary);
}

.tech-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.tech-tag {
    background: var(--primary-light);
    color: var(--primary-color);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    border: 1px solid var(--border-color);
}

.why-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.why-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.why-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.why-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.why-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.why-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

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

@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .mefema-values-box {
        padding: 2rem 1.5rem;
    }
}
</style>

