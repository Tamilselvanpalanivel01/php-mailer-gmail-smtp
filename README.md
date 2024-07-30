# PHP Mailer to Gmail using SMTP

This project demonstrates how to use PHPMailer to send emails through Gmail's SMTP server using PHP.

## Prerequisites

- PHP 7.0 or higher
- Composer
- A Gmail account

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/php-mailer-gmail-smtp.git
    cd php-mailer-gmail-smtp
    ```

2. **Install dependencies:**

    Ensure you have Composer installed. If not, download it from [Composer](https://getcomposer.org/).

    ```bash
    composer install
    ```

## Configuration

1. **Enable less secure apps:**

    Go to your [Google Account settings](https://myaccount.google.com/lesssecureapps) and enable access for less secure apps. (Note: This step is required if you are not using app-specific passwords.)

2. **Create the email sending script:**

    Create a file named `send_mail.php` in the project root with the following content:

    ```php
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                           // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                  // Enable SMTP authentication
        $mail->Username   = 'your-email@gmail.com';// SMTP username
        $mail->Password   = 'your-email-password'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                   // TCP port to connect to

        //Recipients
        $mail->setFrom('your-email@gmail.com', 'Mailer');
        $mail->addAddress('recipient@example.com', 'Joe User');     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    ```

3. **Secure your credentials:**

    - Use environment variables or a secure vault to store your email credentials.
    - If using two-factor authentication, generate an App Password for use in the script.

## Usage

1. **Run the script:**

    ```bash
    php send_mail.php
    ```

2. **Check the output:**

    The script will output the status of the email sending process. If successful, you will see "Message has been sent."

## Troubleshooting

- Ensure `openssl` extension is enabled in your `php.ini` file.
- Verify your Gmail account settings for less secure app access or use an App Password if two-factor authentication is enabled.
- Check the PHPMailer [documentation](https://github.com/PHPMailer/PHPMailer) for more detailed configuration options and troubleshooting tips.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
