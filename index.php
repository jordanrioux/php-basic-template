<?php

require_once "inc/functions/forms.php";

// TODO: Maybe use an Array/List?
$firstname = "";
$lastname = "";
$email = "";
$terms = "";

$firstnameErrorMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = getFormField("firstname");
    if (empty($firstname)) {
        $firstnameErrorMessage = "First name is mandatory.";
    }
    $lastname = getFormField("lastname");
    $email = getFormField("email");    
    $terms = getFormField("terms");
    
    // TODO: Validate fields
    // TODO: Save to database, etc.
}

?>
<?php require_once "inc/shared/header.php"; ?>

<div class="container">
    <h1>Boutique en ligne</h1>
    <ul>
        <li>
            <a href="product.php?product_id=1">Produit #1</a>
        </li>
        <li>
            <a href="product.php?product_id=2">Produit #2</a>
        </li>
    </ul>

    <form action="<?=$_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="form-row">
            <div class="col mb-3">
                <label>First name</label>
                <input type="text" class="form-control <?=getFormValidationCssClass("firstname", empty($firstnameErrorMessage)); ?>" name="firstname" value="<?=$firstname ?>">
                <div class="<?=(empty($firstnameErrorMessage) ? "valid-feedback" : "invalid-feedback"); ?>">
                    <?=$firstnameErrorMessage ?>
                </div>
            </div>
            <div class="col mb-3">
                <label>Last name</label>
                <input type="text" class="form-control" name="lastname" value="<?=$lastname ?>">
                <div class=""></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?=$email ?>">
                <div class=""></div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="1" id="acceptTerms" name="terms" <?=getCheckedAttribute("terms"); ?>>
                <label class="form-check-label" for="acceptTerms">
                    Agree to terms and conditions
                </label>
                <div class=""></div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

<?php require_once "inc/shared/footer.php"; ?>