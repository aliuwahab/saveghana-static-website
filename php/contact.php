<?php
/**
 * Contact Form Handler for SAVE-Ghana
 * 
 * This script processes contact form submissions and sends emails
 * Make sure to update the email addresses below before deploying
 */

// Configuration
define('RECIPIENT_EMAIL', 'info@saveghana.org'); // Main contact email
define('SENDER_EMAIL', 'info@saveghana.org'); // Real email address
define('SENDER_NAME', 'SAVEGhana Website');

// Set response header
header('Content-Type: application/json');

// Initialize response
$response = [
    'success' => false,
    'message' => ''
];

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Sanitize and validate input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get form data
$name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : '';
$message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (empty($subject)) {
    $errors[] = 'Subject is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// Check for validation errors
if (!empty($errors)) {
    $response['message'] = implode(', ', $errors);
    echo json_encode($response);
    exit;
}

// Map subject values to readable text
$subject_map = [
    'partnership' => 'Partnership Opportunity',
    'donation' => 'Donation Inquiry',
    'volunteer' => 'Volunteer Opportunity',
    'general' => 'General Inquiry',
    'media' => 'Media & Press',
    'other' => 'Other'
];

$subject_text = isset($subject_map[$subject]) ? $subject_map[$subject] : 'General Inquiry';

// Prepare email
$email_subject = "New Contact Form Submission - " . $subject_text;

// Create email body
$email_body = "You have received a new message from the SAVE-Ghana website contact form.\n\n";
$email_body .= "Contact Details:\n";
$email_body .= "----------------\n";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Phone: " . (!empty($phone) ? $phone : 'Not provided') . "\n";
$email_body .= "Subject: " . $subject_text . "\n\n";
$email_body .= "Message:\n";
$email_body .= "--------\n";
$email_body .= $message . "\n\n";
$email_body .= "----------------\n";
$email_body .= "This message was sent from the SAVE-Ghana website contact form.\n";
$email_body .= "Date: " . date('Y-m-d H:i:s') . "\n";

// Prepare email headers
$headers = [];
$headers[] = "From: " . SENDER_NAME . " <" . SENDER_EMAIL . ">";
$headers[] = "Reply-To: " . $name . " <" . $email . ">";
$headers[] = "X-Mailer: PHP/" . phpversion();
$headers[] = "Content-Type: text/plain; charset=UTF-8";

// Send email
$mail_sent = @mail(RECIPIENT_EMAIL, $email_subject, $email_body, implode("\r\n", $headers));

if ($mail_sent) {
    $response['success'] = true;
    $response['message'] = 'Thank you for contacting us! We will get back to you soon.';

    // Optional: Send auto-reply to the sender
    send_auto_reply($email, $name);
} else {
    // Log the error for debugging
    error_log("Contact form mail() failed. Name: $name, Email: $email");

    $response['message'] = 'Unable to send message. Please try again later or call us on +233(0)208830901';
}

echo json_encode($response);
exit;

/**
 * Send an auto-reply to the form submitter
 */
function send_auto_reply($recipient_email, $recipient_name) {
    $subject = "Thank you for contacting SAVE-Ghana";
    
    $message = "Dear " . $recipient_name . ",\n\n";
    $message .= "Thank you for reaching out to SAVE-Ghana. We have received your message and will respond as soon as possible.\n\n";
    $message .= "In the meantime, feel free to explore our website to learn more about our projects and impact:\n";
    $message .= "- About Us: https://www.save-ghana.org/about.html\n";
    $message .= "- Our Projects: https://www.save-ghana.org/projects.html\n";
    $message .= "- Blog & News: https://www.save-ghana.org/blog.html\n\n";
    $message .= "Best regards,\n";
    $message .= "The SAVE-Ghana Team\n\n";
    $message .= "----------------\n";
    $message .= "SAVE-Ghana\n";
    $message .= "Sustainable Aid through Voluntary Establishment\n";
    $message .= "Email: info@saveghana.org\n";
    $message .= "Head Office: Tumu, Upper West Region, Ghana\n";
    $message .= "Program Office: Accra, Ghana\n";
    
    $headers = [];
    $headers[] = "From: " . SENDER_NAME . " <" . SENDER_EMAIL . ">";
    $headers[] = "X-Mailer: PHP/" . phpversion();
    $headers[] = "Content-Type: text/plain; charset=UTF-8";
    
    mail($recipient_email, $subject, $message, implode("\r\n", $headers));
}
?>
