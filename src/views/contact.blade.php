<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h2>Welcome to Contact Form</h2>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eligendi nam! Ab optio esse consequuntur est nostrum velit inventore? Illum provident, sunt eum quidem architecto soluta illo nihil perspiciatis atque.
    </p>
    <form action="{{ route('contact.submit') }}" method="POST">
        <label for="">Subject</label>
        <input type="text" name="subject" id="subject">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <textarea name="message" id="message" rows="4"></textarea>
        <br>

        <button type="submit">Send Message</button>

    </form>
</body>
</html>