<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            overflow: hidden;
            padding: 20px;
        }
        .header {
            background-color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }
        .header img {
            width: 75px;
            height: auto;
        }
        .content {
            margin: 20px 0;
            font-size: 16px;
            line-height: 1.5;
        }
        .content p {
            margin: 0 0 10px;
        }
        .contact-info {
            margin-top: 20px;
            padding: 10px;
            border-top: 1px solid #dddddd;
            font-size: 14px;
        }
        .contact-info p {
            margin: 0;
            line-height: 1.6;
        }
        .footer {
            font-size: 14px;
            text-align: center;
            color: #888888;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid #7052fb;
        }
        .footer a {
            color: #7052fb;
            text-decoration: none;
        }
        .button {
            display: inline-block;
            padding: 5px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #7052fb;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://www.enterests.com/asset/images/logo.webp" alt="Enterests Logo">
        </div>
        <div class="content">
            <p>Dear <?=$name?>,</p>
            <p>Thank you for contacting Enterests, your preferred CRM and project management web application.</p>
            <p>We have received your message and our team will review it. You can expect a response within 24 hours on working days.</p>
            <p><strong>Contact Details:</strong></p>
            <p><strong>Name:</strong> <?=$name?></p>
            <p><strong>Company:</strong> <?=$company?></p>
            <p><strong>Package:</strong> <?=$package?></p>
            <p><strong>Number of Users:</strong> <?=$users?></p>
            <p><strong>Comment:</strong> <?=$comment?></p>
            <p><strong>Email:</strong> <?=$email?></p>
            <p><strong>Phone:</strong> <?=$phone?></p>
            <p>If you have any immediate questions or need further assistance, please visit our <a href="http://www.enterests.com" class="button">website</a>.</p>
            <p>Best regards,<br>
            The Enterests Team</p>
        </div>
        <div class="contact-info">
            <p><strong>Contact Us:</strong></p>
            <p>Email: <a href="mailto:support@enterests.com">info@enterests.com</a></p>
            <p>Phone: <a href="tel:+1234567890">+92 333 102 202 5</a></p>
            <p>Address: P-120 Siddiq Trade Centre, Lahore Pakistan</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Enterests. All rights reserved.</p>
            <p><a href="https://www.enterests.com">Visit Our Website</a></p>
        </div>
    </div>
</body>
</html>
