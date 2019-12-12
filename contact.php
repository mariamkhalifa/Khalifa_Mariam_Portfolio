<section id="contact">
    <h1>Let's create together..</h1>
    <p>You can use this contact form to get in touch. I'll get back to you within 2 business days. 
<br>Unless, of course, I am unable to do so!</p>
    <form id="form" action="contact/data_contact.php" method="post">
        <label for="u-name"></label>
        <input id="u-name" type="text" name="name" placeholder="Name: Harry Potter" required>

        <label for="u-email"></label>
        <input id="u-email" type="email" name="email" placeholder="Email: harry@hogwarts.edu" required>

        <label for="u-subject"></label>
        <input id="u-subject" type="text" name="subject" placeholder="Subject.." required>

        <label for="u-message"></label>
        <textarea id="u-message" name="message" Placeholder="Message.." rows="11" required></textarea>

        <button class="submit-btn" type="submit">Submit</button>
    </form>
    
</section>
