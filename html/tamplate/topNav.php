<section class="engine"><a rel="nofollow" href="#">Oscar guimba</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="views/images/guiamba.png" alt="Mobirise"></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item">
                          <a class="mbr-buttons__link btn text-white" href="#">INICIO</a></li><li class="mbr-navbar__item">
                          <a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target="#Login">INICIAR SESSÃO</a></li><li class="mbr-navbar__item">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" data-toggle="modal" data-target="#Registro">REGISTRO</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="Login" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Iniciar Sessão</h4>
       </div>
       <div class="modal-body">
         <div role="form">
           <div class="form-group">
             <label for="usrname_or_email"><span class="glyphicon glyphicon-user"></span> Usuario ou Email</label>
             <input type="text" class="form-control" id="user_login" placeholder="Insira seu email">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha</label>
             <input type="text" class="form-control" id="pass_login" placeholder="Insira sua Senha">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" value="1" id="session_login" checked>Lembrar-rme</label>
           </div>
           <button type="button" class="btn btn-default btn-success btn-block" id="iniciar_sesion"><span class="glyphicon glyphicon-off"></span> Iniciar Sessão</button>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <p>Já possui Registro? <a data-toggle="modal" data-target="#Registro">Registrar-se!</a></p>
         <p>Recuperar <a data-toggle="modal" data-target="#Lostpass">Senha?</a></p>
       </div>
     </div>
   </div>
 </div>

<div class="modal fade" id="Registro" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
       </div>
       <div class="modal-body">
         <form role="form">
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
             <input type="text" class="form-control" id="user_reg" placeholder="Insira nome de usuário">
           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
             <input type="email" class="form-control" id="email_reg" placeholder="Insira seu e-mail">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha</label>
             <input type="text" class="form-control" id="pass_reg" placeholder="Insira a Senha">
           </div>
           <div class="form-group">
             <label for="psw_two"><span class="glyphicon glyphicon-eye-open"></span> Confirmar Senha</label>
             <input type="text" class="form-control" id="pass_reg_dos" placeholder="Insira a nova Senha">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" id="tyc_reg" value="1" checked>Aceitar T&C</label>
           </div>
           <button type="button" id="registrarme" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrar-me</button>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>

 <div class="modal fade" id="Lostpass" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Recuperar Senha</h4>
        </div>
        <div class="modal-body">
          <div role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-enveloper"></span> Email</label>
              <input type="email" class="form-control" id="email_lostpass" placeholder="Enter email">
            </div>
            <button type="button" class="btn btn-default btn-success btn-block" id="recuperar_passs"><span class="glyphicon glyphicon-off"></span> Recuperar</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div>