<form name="post" action="./" method="<?= $form->method; ?>" enctype="multipart/form-data" novalidate>
    <p style="margin-bottom: 10px; text-align: right"><a href="./" title="Atualizar">Atualizar</a></p>
    <div class="col2">
        <input type="text" id='name' name="name" value="<?= $form->name; ?>" placeholder="Digite o Nome:"/>
        <input type="email" name="mail" value="<?= $form->mail; ?>" placeholder="Digite o E-mail:" required/>
    </div>
    <button>Enviar Agora!</button>
</form>