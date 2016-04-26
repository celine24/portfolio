<div id="contact" class="panel">
    <div class="content">
        <h1>Me contacter</h1>
        <div class="wrapper-content">
            <form class="contact-form" action="form.php" method="POST">
                <div class="form-message"><?php echo isset($_SESSION["sending"]) ? $_SESSION["sending"] : ''; ?></div>
                <div class="form-input">
                    <input type="text" placeholder="Votre Nom" name="lastname" required value="<?php echo isset($_SESSION["inputs"]["lastname"]) ? $_SESSION["inputs"]["lastname"] : ''; ?>" />
                    <?php if (isset($_SESSION["errors"]["lastname"])): ?>
                        <div class="error">
                            <?php echo $_SESSION["errors"]["lastname"]; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-input">
                    <input type="text" placeholder="Votre Prénom" name="firstname" required value="<?php echo isset($_SESSION["inputs"]["firstname"]) ? $_SESSION["inputs"]["firstname"] : ''; ?>" />
                    <?php if (isset($_SESSION["errors"]["firstname"])): ?>
                        <div class="error">
                            <?php echo $_SESSION["errors"]["firstname"]; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-input">
                    <input type="text" placeholder="Votre Email" name="email" required value="<?php echo isset($_SESSION["inputs"]["email"]) ? $_SESSION["inputs"]["email"] : ''; ?>" />
                    <?php if (isset($_SESSION["errors"]["email"])): ?>
                        <div class="error">
                            <?php echo $_SESSION["errors"]["email"]; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-textarea">
                    <textarea name="message" required><?php echo isset($_SESSION["inputs"]["lastname"]) ? $_SESSION["inputs"]["lastname"] : 'Votre Message'; ?></textarea>
                    <?php if (isset($_SESSION["errors"]["message"])): ?>
                        <div class="error">
                            <?php echo $_SESSION["errors"]["message"]; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <input type="submit" name="submit" value="Envoyer" />
            </form>
            <div class="contact-info">
                <div>Céline Peyrot</div>
                <div>Intégrateur-Développeur Web</div>
                <div>peyrot.celine@gmail.com</div>
                <div>(Gironde, France)</div>

            </div>
        </div>
        <!-- ... -->
    </div>
</div>