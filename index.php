<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
    
    $username = $_POST['number'];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.lt';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@padangos-gariunai.lt';
    $mail->Password = '9E\U]ZZcw2}mvmFd/.=E(UdHG#fk,fR~WRxg';
    $mail->setFrom('info@padangos-gariunai.lt', $username);
    $mail->addAddress('no-replay@padangos-gariunai.lt', 'Receiver');
    if ($_POST['diameter'] || $_POST['width'] || $_POST['heigh'] || $_POST['number'] != ""){
        $mail->Subject = "Laiskas nuo: ".$username; //sets up subject of the email
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Skersmuo: {$_POST['diameter']}
            Plotis: {$_POST['width']}
            Aukstis: {$_POST['heigh']}
            Numeris: {$_POST['number']}
            EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Aciu, jusu laiskas issiustas';
        }
    } else {
        $msg = 'Share it with us!';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact form</title>
    </head>
    <body>
        <h1>Do You Have Anything in Mind?</h1>
        <?php if (!empty($msg)) {
            echo "<h2>$msg</h2>";
        } ?>
        <form method="POST">

        <!-- 
        diamemtras - diameter+
        plotis - width+
        aukstis - heigh+
        numeris - number+
        -->
            <label for="diameter"><input type="text" name="diameter" id="diameter" placeholder="Diamentras" required></label><br><br>
            <label for="width"><input type="number" name="width" id="width" placeholder="Plotis"  required></label><br><br>
            <label for="heigh"><input type="number" name="heigh" id="heigh" placeholder="Aukstis"  required></label><br><br>
            <label for="number"><input type="number" name="number" id="number" placeholder="Telefono numeris" required></label><br><br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>

  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
        diameter: {
            presence: {allowEmpty: false}
        },
        width: {
            presence: {allowEmpty: false},
        },
        heigh: {
            presence: {allowEmpty: false},
        },
        number: {
            presence: {allowEmpty: false}
        }
      };

      const form = document.getElementById('contact-form');

      form.addEventListener('submit', function (event) {
            const formValues = {
                diameter: form.elements.diameter.value,
                width: form.elements.width.value,
                heigh: form.elements.heigh.value,
                number: form.elements.number.value
             };

              const errors = validate(formValues, constraints);

            if (errors) {
                 event.preventDefault();
                 const errorMessage = Object
                    .values(errors)
                    .map(function (fieldValues) {
                      return fieldValues.join(', ')
                })
                .join("\n");

              alert(errorMessage);
          }
      }, false);
  
  </script>
</body>
</html>