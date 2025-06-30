<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="travelproj.css" />
  </head>
  <body>
    <img class="bg" src="travel.jpg" alt="travel.jpg" />
    <div class="container">
      <h1>Welcome to MCGK US Trip form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <p class="submitMsg">
        Thanks for submitting your form. We are happy to see you joining us for
        the US trip
      </p>

      <form action="travelproj.php" method="post">
        <input
          type="text"
          name="name "
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
        />
        <textarea name="other" id="other" cols="30" rows="10">
enter any other information here  </textarea
        >
        <button class="btn" type="submit">Submit</button>
        <!--<button class="btn">Reset</button>-->
      </form>
    </div>
  </body>
</html>
