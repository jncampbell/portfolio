<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="email-background" style="max-width: 600px; background: #eee; margin: 0 auto; padding: 10px;">
    <div class="pre-header" style="text-align: center; font-size: 24px; max-width: 600px; background: #fff; margin: 0 auto; padding: 20px 0;" align="center">
        <a href="http://www.jncampbell.com" style="color: rgb(0, 181, 181); text-decoration: none;">jncampbell.com</a>
    </div>
    <div class="email-container" style="max-width: 600px; font-size: 16px; overflow: hidden; border-top-color: #eee; border-top-width: 2px; border-top-style: solid; background: #fff; margin: 0 auto;">
        <div class="confirmation-message" style="padding: 20px 0;">
            <p style="margin: 15px;">
                Hey! Your message to <a href="http://www.jncampbell.com" style="color: rgb(0, 181, 181); text-decoration: none;">jncampbell.com</a> was
                successfully sent. Below are the details of your message in case you ever want
                to refer to it. Thanks for reaching out!
            </p>
        </div>
        <div class="original-message" style="border-top-width: 2px; border-top-color: #eee; border-top-style: solid; padding: 10px 0;">
            <h2 style="text-align: center; font-size: 16px; font-weight: normal;" align="center">Your original message</h2>
            <p style="margin: 15px;"><span class="bold" style="font-weight: bold;">Sent:</span> {{ $email->created_at->format('l, F jS Y | h:ia T') }} </p>
            <p style="margin: 15px;"><span class="bold" style="font-weight: bold;">Subject:</span> {{ $email->subject }}</p>
            <p style="margin: 15px;"><span class="bold" style="font-weight: bold;">Message:</span> {{ $email->body }}</p>

        </div>
    </div>
    <div class="email-footer" style="max-width: 600px; overflow: hidden; background: #fff; margin: 0 auto;">
        <ul style="width: 100%; text-align: center; margin: 0; padding: 0; list-style: none;">
            <li style="border-top-width: 2px; border-top-color: #eee; border-top-style: solid;">
                <a href="http://jncampbell.com" style="font-size: 1.15em; color: rgb(0, 181, 181); text-decoration: none; display: inline-block; height: 100%; width: 100%; padding: 15px 0;">Visit Site</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
