# PHPMailer SMTP Email Sender (PHP)

A simple PHP script to send emails using **PHPMailer** via Gmail SMTP. Ideal for testing or integrating email notifications into your PHP applications.
I had to build this too for quick notifications in my PHP apps, i Love PHP!

---

## Features

- Sends emails via Gmail SMTP server.
- Uses `PHPMailer` for robust and secure email delivery.
- Supports TLS encryption for better security.
- Simple and easy to modify for custom use.

---

## Requirements

- PHP 7.2+ ( even PHP 7.00 sometimes, lol )
- Composer
- An active Gmail account
- PHPMailer library


## Installation

1. **Clone the project** or download the script:
   :: Run in terminal 
   git clone https://github.com/innocent1105/php-email-service.git
   cd phpmailer-smtp-sender


2. **Install PHPMailer via Composer**:
   :: Run in terminal 
   composer require phpmailer/phpmailer

3. **Update email credentials** in the script:

   :: In your PHP script
   $mail->Username = 'your-email@gmail.com';
   $mail->Password = 'your-app-password'; // Use an App Password


## 🧪 Usage

1. Start your PHP server (e.g. XAMPP or built-in PHP server):

   :: Run in terminal 
   php -S localhost:8000

2. Access the script in your browser:
   :: Run in browser
   
   http://localhost:8000/sendmail.php


4. You should see:

   ```
   Email sent successfully!
   ```

## 🔐 Security Note

> ⚠️ **Do NOT hardcode your Gmail password directly in production code.**

### Use an App Password:

* Go to [Google Account > Security > App Passwords](https://myaccount.google.com/apppasswords)
* Generate a password for "Mail"
* Replace your Gmail password in the script with the **App Password**

---

## 📄 Example

:: Run in PHP script
$mail->setFrom('your-email@gmail.com', 'Your Name');
$mail->addAddress('recipient@example.com', 'Recipient Name');
$mail->Subject = 'Test Email';
$mail->Body    = 'This is a test email using PHPMailer and Gmail SMTP.';


## 📚 Resources

* [PHPMailer GitHub](https://github.com/PHPMailer/PHPMailer)
* [Gmail App Password Guide](https://support.google.com/accounts/answer/185833)



## 🧑‍💻 Author

**Innocent Mugwadi**

---

## 📝 License

MIT License

