
<style>
/* Estilos para o Formulário de Aquisição */
.acquisition-option input[type="radio"] {
    display: none;
}
.option-card {
    display: flex;
    align-items: center;
    padding: 15px;
    border: 2px solid #eee;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    height: 100%;
}
.option-card i {
    font-size: 24px;
    margin-right: 15px;
    color: #666;
}
.option-title {
    display: block;
    font-weight: bold;
    font-size: 1.1rem;
}
.option-desc {
    font-size: 0.85rem;
    color: #777;
}
.acquisition-option input[type="radio"]:checked + .option-card {
    border-color: var(--primary-color);
    background-color: rgba(var(--primary-rgb), 0.05);
}
.acquisition-option input[type="radio"]:checked + .option-card i {
    color: var(--primary-color);
}
.custom-check {
    padding: 10px;
    border-radius: 5px;
    transition: background 0.2s;
}
.custom-check:hover {
    background: #f8f9fa;
}
.featured-badge {
    background: linear-gradient(135deg, #4a90e2, #007aff);
    color: white;
    padding: 5px 15px;
    border-radius: 0 0 0 15px;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 10;
}
</style>