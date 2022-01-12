<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>S'identifier</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">

            <div class="form-group">
                <label>Nom complet</label>
                <input type="tel" class="form-control" name="email" id="email">
                <i class="icon_user"></i>
            </div>

            <div class="form-group">
                <label>Numéro de téléphone</label>
                <input type="tel" class="form-control" name="email" id="email">
                <i class="icon_phone"></i>
            </div>

            <div class="form-group">
                <label>Email (optionnel)</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>

            <div class="form-group">
                <label>Créer un mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Se souvenir de moi
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Mot de passe oublié ?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Connexion" class="btn_1 full-width"></div>
            <div class="text-center">
                Pas de compte jusque là ? <a href="register.html">Nous rejoindre</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Veillez confirmer votre adresse mail</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>Vous revevrez un mail contenant un lien vous permettant de réinitialiser votre mot de passe par un nouveau à souhait</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->
