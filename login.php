<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Root and Password Form</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white; /* White background */
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .title {
            font-size: 33px;
            color: #ff69b4; /* Pink color for the title text */
            margin-bottom: 20px;
            font-weight: bold;
        }
        .form-container {
            background-color: #ff69b4; /* Pink background for the form */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: white; /* White color for the form title */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white; /* White color for labels */
        }
        .form-group input {
            width: 100%;
            padding: 8px; /* Reduced padding for smaller text fields */
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateForm(event) {
            event.preventDefault();
            const root = document.getElementById('root').value;
            const password = document.getElementById('password').value;

            const validRoot = 'pavanibeauty123@';
            const validPassword = 'pavani123@';

            if (root === validRoot && password === validPassword) {
                window.location.href = 'displaydb.php';
            } else {
                alert('Invalid root or password. Please try again.');
            }
        }
    </script>
</head>
<body>
    <div class="title">Pavani's Beauty Boutique</div>
    <div class="form-container">
        <h2>Login</h2>
        <form onsubmit="validateForm(event)">
            <div class="form-group">
                <label for="root">Root</label>
                <input type="text" id="root" name="root" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
