<div id="addUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar novo usuário</h4>
            </div>
            <div class="modal-body">
                <form name="formUser" onsubmit="register(); return false">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required
                            autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="sobrenome" type="text" class="form-control" name="sobrenome" placeholder="Sobrenome"
                            required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required
                            autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input id="telefone" type="text" class="form-control" name="telefone" placeholder="Telefone"
                            required autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Atualizar informações do usuário</h4>
            </div>
            <div class="modal-body">
                <form name="formUserUpdate" onsubmit="update(); return false">
                    <input type="text" name="id" id="id" style="display: none;">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required
                            autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="sobrenome" type="text" class="form-control" name="sobrenome" placeholder="Sobrenome"
                            required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required
                            autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input id="telefone" type="text" class="form-control" name="telefone" placeholder="Telefone"
                            required autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                </form>
            </div>
        </div>
    </div>
</div>