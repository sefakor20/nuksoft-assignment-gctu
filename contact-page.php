<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <style>
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            margin-left: 270px;
            margin-top: 50px;
        }

        input[type=text], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc; 
            border-radius: 1px; 
            box-sizing: border-box; 
            margin-top: 6px; 
            margin-bottom: 16px;
            resize: vertical ;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        h1 {
            text-align: center;
        }

        #success-message {
            color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Form</h1>
        <div id="success-message"></div>
        <form id="contactForm" method="POST">
    
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Your name..">
                <span id="name_error"></span>
            </div>


            <div>
                <label for="digital_address">Digital Address</label>
                <input type="text" id="digital_address" name="digital_address" placeholder="Your digital address..">
                <span id="digital_address_error"></span>
            </div>
            
            <div>
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" placeholder="Your email address..">
                <span id="email_error"></span>
            </div>

            <div>
                <label for="telephone_number">Telephone Number</label>
                <input type="text" id="telephone_number" name="telephone_number" placeholder="Your telephone number address..">
                <span id="telephone_error"></span>
            </div>

            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
                <span id="message_error"></span>
            </div>
    
            <input type="submit" value="Submit">
    
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
</body>
</html>