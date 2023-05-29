<div class="container">
<div class="page__contacts">
    <div class="contacts">
        <h3 class="contacts__title">Contacts:</h3>
        <div class="item__contact">
            <div class="item__contact">
                <span class="item__contact_text" title="Contact address">55 Main St. Toronto, ON MN 3A5</span>
            </div>
            <div class="item__contact">
                <a class="item__contact_text" href="tel:+4165555252" title="Contact phone">(416) 555-5252</a>
            </div>
            <div class="item__contact">
                <a class=" item__contact_text" href="mailto: hello@treehouse.com" title="Contact email">hello@treehouse.com</a>
            </div>
        </div>
    </div>
    <div class="form__item">
        <h3>If you want to know something else write us</h3>
        <form action="./?key=form"  method="post">
           
            <p class="form__name">Name:</p>
            <input type="text" name="user_name" placeholder="Enter name">
            <p class="form__phone">Phone:</p>
            <input type="text" maxlength="21" name="tel" required placeholder="+375 (XX) XXX-XX-XX">
            <p class="form__email">Email:</p>
            <input type="text"  name="email" required placeholder="mail@mail.com">
            <p class="form__message">Message:</p>
            <textarea class="feedback_message" name="message" required placeholder="Write you request more than 5 characters"></textarea>
            <button class="btn_send">Send</button>
        </form>

    </div>

</div>
</div>