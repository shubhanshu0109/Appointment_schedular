<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/myfavicon.jpeg">
    <title>Query form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(245, 247, 249);
        }
        
        * {
            box-sizing: border-box;
        }
        
        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: brown;
            font-size: 40px;
            font-weight: 900;
            text-align: center;
            border: 5px solid black;
            border-radius: 50px;
            max-width: 60vw;
            position: relative;
            left: 250px;
            background-color: burlywood;
        }
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #3664d0;
        }
        
        .container {
            border-radius: 5px;
            background-color: #b6eaf5;
            padding: 20px;
        }
    </style>
</head>

<body>

    <button type="button" class="btn btn-danger m-5" style="color:white; text-decoration: none;"><a href="/appointment_schedular/index.php">Return to home page</a></button>
    <h1>How Hay I Help You</h1>
    <h3>Contact Form</h3>

    <div class="container">

        <form action="mailto:shubhashu620@gmail.com">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
      <option value="australia">India</option>
      <option value="australia">China</option>
      <option value="australia">Rusia</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>