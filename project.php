<?php
    $appName = "Chatbot Application";
    $appDescription = "A chatbot is a software program that interacts with users through text or voice messages. It is designed to mimic human conversation and provide quick responses to user queries. Chatbots are commonly used in customer service, apps, websites, and messaging platforms. They help answer questions, give recommendations, or perform tasks like making reservations. Simple chatbots follow pre-set rules, while advanced ones learn from interactions to improve over time. Chatbots save time by automating repetitive tasks and reducing the need for human assistance. They are popular in industries like healthcare, education, and e-commerce. Chatbots are easy to customize for different purposes and improve user satisfaction. They can handle multiple users at once, making them highly efficient. Overall, chatbots are a smart way to make communication faster and easier.";
    $apkLink = "app-debug.apk"; // Path to your APK file

    // Features with extended descriptions for each feature
    $features = [
        "User-Friendly Interface" => [
            "description" => "Our chatbot offers an intuitive interface that is easy to navigate for users of all ages. With a simple design and clear instructions, even first-time users will feel comfortable interacting with the bot.",
            "moreInfo" => "The interface is designed to reduce complexity, allowing users to focus on their queries rather than figuring out how to use the application. The chatbot supports both text and voice input, so users can choose their preferred method of interaction. It adapts to the user's behavior, simplifying the experience for each individual."
        ],
        "Instant Responses" => [
            "description" => "Get instant answers to your queries without waiting for human assistance, making the experience faster and more efficient. Whether you're seeking information or looking for a service, the chatbot is designed to respond immediately.",
            "moreInfo" => "By using advanced algorithms and AI, the chatbot processes user inputs quickly, providing instant feedback. This makes the app highly effective in resolving customer inquiries without delays, especially during peak hours. Instant responses improve user satisfaction and ensure that no time is wasted during interactions."
        ],
        "Multilingual Support" => [
            "description" => "The chatbot is capable of understanding and responding in multiple languages to cater to a global audience. Whether you're in Europe, Asia, or the Americas, the bot can interact in your native language.",
            "moreInfo" => "Currently, the chatbot supports languages such as English, Spanish, French, German, and Chinese. More languages are being added continuously to provide a truly global service, ensuring that users from different regions can have seamless interactions. This feature is beneficial for businesses that operate internationally, enabling them to provide customer service in various languages."
        ],
        "24/7 Availability" => [
            "description" => "Unlike human agents, the chatbot is available round the clock, offering assistance at any time of the day or night. Whether it's early in the morning or late at night, the bot is always ready to help.",
            "moreInfo" => "This feature is particularly beneficial for businesses that operate in multiple time zones. It ensures that no matter when a user needs help, they can always get assistance from the chatbot without waiting for human agents to be available. The chatbot never needs breaks, vacations, or holidays, ensuring continuous support."
        ],
        "Data Privacy" => [
            "description" => "We prioritize your privacy, ensuring that all interactions with the chatbot are secure and confidential. Your personal data is never shared with third parties without your consent.",
            "moreInfo" => "The chatbot adheres to strict data protection regulations such as GDPR and CCPA. It uses encryption and other security measures to keep your personal information safe, so you can chat with peace of mind. We do not store sensitive data beyond what's necessary for providing the best service possible."
        ],
        "Developer Team" => [
            "description" => "This application is developed by talented individuals dedicated to creating user-friendly and efficient solutions.",
            "moreInfo" => "The development team includes Akshay Barde and Chaitanya Boralkar from class CO-6I. They have worked tirelessly to design and build this chatbot application, ensuring it meets the highest standards of quality and usability."
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $appName; ?></title>
    <style>
        body {
            padding: 20px;
            margin: 20px;
            background-color: aqua;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        #H1 {
            width: 100%;
            height: 50px;
            text-align: center;
            font-size: 2rem;
        }
        details {
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
        }
        summary {
            font-size: 1.5rem;
            font-weight: bold;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .download-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .download-btn:hover {
            background-color: #45a049;
        }

        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }
            #H1 {
                font-size: 1.5rem;
            }
            p {
                font-size: 1rem;
            }
            .download-btn {
                font-size: 1rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <h1 id="H1"><?php echo $appName; ?></h1>

    <details>
        <summary>Chatbot Application Description</summary>
        <p>
            <?php echo $appDescription; ?>
        </p>
    </details>

    <?php foreach ($features as $feature => $info): ?>
        <details>
            <summary><?php echo $feature; ?></summary>
            <p><strong>Description:</strong> <?php echo $info['description']; ?></p>
            <p><strong>More Information:</strong> <?php echo $info['moreInfo']; ?></p>
        </details>
    <?php endforeach; ?>

    <a href="<?php echo $apkLink; ?>" class="download-btn" download>Download APK</a>
</body>
</html>
