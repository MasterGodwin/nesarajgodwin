<a href="https://api.whatsapp.com/send?phone=+917708450286&amp;text= Hello Jona, I visited your website I need more information." target="_blank" id="Whatsapp">
    <img src="WhatsApp.svg" alt="WhatsApp">
</a>
   
   <a href="tel:+917708450286" target="_blank" id="Phonei">
    <img src="phone.png" alt="Phone">
</a>

<footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2025 by Jona | All Rights Reserved</p>
        </div>

        <div class="footer-Icontop">
            <a href="#" style="text-decoration: none;"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

  
        <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
</script>

    