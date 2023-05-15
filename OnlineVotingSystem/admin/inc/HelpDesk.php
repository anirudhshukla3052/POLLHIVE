<!DOCTYPE html>
<html>

<head>
    <title>Help Desk - E-Voting Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="helpdesk.css"> -->
</head>

<body>
    <header>
        <h1>Help Desk</h1>
    </header>
    <main>
        <section>
            <h2>FAQs</h2>
            <ul>
                <li>
                    <h3>How do I register to vote?</h3>
                    <p>You can register to vote by visiting our Sigh_up page and filling out the form. You'll need
                        to provide some personal information, including your Name, UID and a strong Password.</p>
                </li>
                <li>
                    <h3>Can I change my vote?</h3>
                    <p>No, once you have submitted your vote, you cannot change it.</p>
                </li>
                <li>
                    <h3>What happens if there is a tie?</h3>
                    <p>If there is a tie, the election will be decided by a random drawing.</p>
                </li>
            </ul>
        </section>
        <section>
            <h2>Contact Us</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
    </main>
    <section class="footer">
        <div class="column">
            <div class="card" id="first">
                <h2>Contact Us</h2>
                <p>If you need further assistance, please contact us:</p>
                <p>Phone: +919915999224, +919115408851, +918146651550, +911723014960</p>
                <p>Email: admissions@cumail.in</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h2>Technical Issues</h2>
                <p>If you are experiencing technical issues, please try the following:</p>
                <ul>
                    <li>Clear your browser cache and cookies</li>
                    <li>Try a different browser</li>
                    <li>Restart your device</li>
                    <li>Contact us for further assistance</li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 E-Voting Website. All rights reserved.</p>

    </footer>
</body>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
    }

    header {
        background-color: #000;
        color: #fff;
        padding: 1rem;
    }

    header h1 {
        margin: 0;
    }

    main {
        max-width: 800px;
        margin: 0 auto;
        padding: 1rem;
    }

    section {
        margin-bottom: 2rem;
    }

    h2 {
        font-size: 2rem;
        margin-top: 0;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 1rem;
        border-bottom: 1px solid #ddd;
        padding-bottom: 1rem;
    }

    h3 {
        font-size: 1.5rem;
        margin-top: 0;
    }

    form label {
        display: block;
        margin-bottom: 0.5rem;
    }

    form input,
    form textarea {
        display: block;
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ddd;
        margin-bottom: 1rem;
    }

    form button {
        background-color: #000;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        text-align: center;
    }

    .column .card {
        background-color: #f2f2f2;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        text-align: center;
        padding-bottom: 7%;
        border-radius: 3%;
        padding: 3%;

    }

    #first {
        height: 24em;
        margin-top: 1%;
        width: 100%;

        padding-left: 5%;
        padding-right: 10%;

    }

    #first h2 {
        padding-bottom: 10%;
    }


    .card h2 {
        padding-top: 2%;
    }

    .column {
        float: left;
        width: 100%;
        /* margin-right: 10%; */
        height: 100%;
        padding: 3%;

    }

    .footer {
        display: grid;
        grid-template-columns: auto auto;
        padding-bottom: 2%;

    }

    @media (max-width:912px) {
        .footer {
            display: block;
        }


        #first h2 {
            padding-bottom: 5%;
        }
    }
</style>

</html>