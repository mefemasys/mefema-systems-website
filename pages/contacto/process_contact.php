<?php
// Configuração de Headers para JSON
header('Content-Type: application/json');

// Incluir dados de contacto
include 'contact_data.php';

// Função para validar e sanitizar entrada
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Função para validar email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Verificar se o método é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Coletar dados do formulário
$name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
$company = isset($_POST['company']) ? sanitize_input($_POST['company']) : '';
$subject = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : '';
$message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';
$privacy = isset($_POST['privacy']) ? true : false;

// Validação dos campos obrigatórios
$errors = [];

if (empty($name)) {
    $errors[] = 'O nome é obrigatório';
}

if (empty($email)) {
    $errors[] = 'O email é obrigatório';
} elseif (!is_valid_email($email)) {
    $errors[] = 'O email fornecido é inválido';
}

if (empty($subject)) {
    $errors[] = 'O assunto é obrigatório';
}

if (empty($message)) {
    $errors[] = 'A mensagem é obrigatória';
} elseif (strlen($message) < 10) {
    $errors[] = 'A mensagem deve ter pelo menos 10 caracteres';
}

if (!$privacy) {
    $errors[] = 'Deve concordar com a política de privacidade';
}

// Se houver erros, retornar resposta com erro
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(', ', $errors)
    ]);
    exit;
}

// Preparar o email
$to = $contact_info['main_email'];
$email_subject = 'Nova Mensagem de Contacto: ' . $subject;

// Corpo do email em HTML
$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%); color: white; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .content { background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #4F46E5; }
        .footer { text-align: center; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding-top: 10px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Nova Mensagem de Contacto</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Nome:</span><br>
                " . htmlspecialchars($name) . "
            </div>
            <div class='field'>
                <span class='label'>Email:</span><br>
                <a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a>
            </div>
            " . (!empty($phone) ? "
            <div class='field'>
                <span class='label'>Telefone:</span><br>
                " . htmlspecialchars($phone) . "
            </div>
            " : "") . "
            " . (!empty($company) ? "
            <div class='field'>
                <span class='label'>Empresa:</span><br>
                " . htmlspecialchars($company) . "
            </div>
            " : "") . "
            <div class='field'>
                <span class='label'>Assunto:</span><br>
                " . htmlspecialchars($subject) . "
            </div>
            <div class='field'>
                <span class='label'>Mensagem:</span><br>
                <p>" . nl2br(htmlspecialchars($message)) . "</p>
            </div>
        </div>
        <div class='footer'>
            <p>Esta mensagem foi enviada através do formulário de contacto do website MEFEMA Systems.</p>
        </div>
    </div>
</body>
</html>
";

// Headers do email
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Enviar o email
$mail_sent = mail($to, $email_subject, $email_body, $headers);

if ($mail_sent) {
    // Enviar também um email de confirmação para o utilizador
    $confirmation_subject = 'Recebemos a sua mensagem - MEFEMA Systems';
    $confirmation_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%); color: white; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .content { background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .footer { text-align: center; font-size: 12px; color: #999; border-top: 1px solid #ddd; padding-top: 10px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Obrigado pelo seu Contacto!</h2>
        </div>
        <div class='content'>
            <p>Olá " . htmlspecialchars($name) . ",</p>
            <p>Recebemos a sua mensagem com sucesso. A nossa equipa irá analisar o seu pedido e entraremos em contacto em breve.</p>
            <p><strong>Detalhes da sua mensagem:</strong></p>
            <ul>
                <li><strong>Assunto:</strong> " . htmlspecialchars($subject) . "</li>
                <li><strong>Data:</strong> " . date('d/m/Y H:i:s') . "</li>
            </ul>
            <p>Se tiver alguma dúvida, pode contactar-nos através de:</p>
            <ul>
                <li><strong>Email:</strong> " . $contact_info['main_email'] . "</li>
                <li><strong>Telefone:</strong> " . $contact_info['phone'] . "</li>
            </ul>
        </div>
        <div class='footer'>
            <p>© 2024 MEFEMA Systems. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
";

    $confirmation_headers = "MIME-Version: 1.0\r\n";
    $confirmation_headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $confirmation_headers .= "From: " . $contact_info['main_email'] . "\r\n";

    mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);

    // Retornar resposta de sucesso
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
    ]);
} else {
    // Retornar resposta de erro
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao enviar a mensagem. Tente novamente mais tarde.'
    ]);
}

exit;
?>
