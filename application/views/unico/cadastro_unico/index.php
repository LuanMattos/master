<form action="<?= site_url("unico/cadastro_unico/Cadastro_unico/index") ?>" method="POST" id="form-cadastro-unico-container">
         <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" >Buscar:</span>
            </div>
            <input type="text" class="form-control" id="buscar">
            <div class="input-group-append">
                <input  type="submit" class="btn btn-info buscar" value="Buscar">
                <button type="button" class="btn btn-info novo " ><i class="far fa-file"></i> Novo</button>
            </div>
        </div>
    </form>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>

