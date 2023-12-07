<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolf Fitness</title>
    
    <link rel="stylesheet" href="stylesAbout.css">
   
</head>
<body>
    <div class="container"></div>
    <header class="main-header">
        <a href="index.html">
            <img id="wolffitnesshalf"src="images/wolffitnesshalf.png" alt="Gym Logo">
        </a>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html">Membership</a></li>
            <li><a href="training.html">Training</a></li>
            
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html" class="btn">BECOME A MEMBER</a></li>
        </ul>
    </nav>
    </header>

<h1>Appointment Form<img src="images/dumbell membership.svg" width="70px" height="60px"></h1>
<main>
    <form action="membershipconfermation.php"method="post"></form>
    <div class="form-container">
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="houseNumber">House Number:</label>
            <input type="text" id="houseNumber" name="houseNumber" required>
        </div>

        <div class="form-group">
            <label for="street">Street Name:</label>
            <input type="text" id="street" name="street" required>
        </div>
        
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
        </div>

        <div class="form-group">
            <label for="province">Province:</label>
            <select id="preferredTime" name="preferredTime">
                <option value="ontario">Ontario</option>
                <option value="Quebec">Quebec</option>
                <option value="BritishColumbia">British Columbia</option>
                <option value="Alberta">Alberta</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Manitoba">Manitoba</option>
                <option value="NovaScotia">Nova Scotia</option>
                <option value="NewfoundlandandLabrador">Newfoundland and Labrador</option>
                <option value="NewBrunswick">New Brunswick</option>
                <option value="PrinceEdwardIsland">Prince Edward Island</option>
                <option value="NorthwestTerritories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Yukon">Yukon</option>
            </select>
        </div>
        <div class="form-group">
            <label for="postalCode">Postal Code:</label>
            <input type="text" id="postalCode" name="postalCode" required>
        </div>
        <div class="form-group">
            <label for="preferredDate">Preferred Date:</label>
            <input type="date" id="preferredDate" name="preferredDate">
        </div>

        <div class="form-group">
            <label for="preferredTime">Preferred Time:</label>
            <select id="preferredTime" name="preferredTime">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>

    </div>


</main>
</body>
</html>