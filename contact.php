<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include 'components/header.php'; ?>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <form action="contact.php" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea id="message" name="message" class="w-full px-3 py-2 border rounded" rows="4"
                    required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $to = "thoeurn.ratha.kh@example.com";
        $subject = "New Contact Form Submission from $name";
        $body = "You have received a new message from your website contact form.\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Message:\n$message";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "<div class='container mx-auto p-4 mt-4 bg-green-100 text-green-700 rounded'>Thank you, $name. Your message has been sent.</div>";
        } else {
            echo "<div class='container mx-auto p-4 mt-4 bg-red-100 text-red-700 rounded'>There was an error sending your message. Please try again later.</div>";
        }
    }
    ?>


    <?php include 'components/footer.php'; ?>
</body>

</html>