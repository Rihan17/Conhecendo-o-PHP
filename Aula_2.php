            <style>
                span{
                    color: white;
                    background-color: black;
                }
            </style>

            <fieldset>
            <form method="post">

                <!--Nome-->
                <label id="text" for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
                <br>
                <br>

                <!--Data de Nascimento-->
                <label id="text" for="dtn">Data de Nascimento: </label>
                <input type="date" name="dtn" id="dtn">
                <br>
                <br>

                <!--Email-->
                <label id="text" for="email">Email: </label>
                <input type="email" name="email" id="email">
                <br>
                <br>

                <!--Cor-->
                <label id="text" for="cor">Cor: </label>
                <input type="color" name="cor" id="cor">
                <br>
                <br>

                <!--Dependentes-->
                <label id="text" for="dependentes">Dependentes: </label>
                <input type="number" step="0.1" min="0" max="10" name="dependentes" id="dependentes">
                    <br>
                    <br>

                    <!--Estado Civil-->
                    <label id="text" for="estado">Estado Civil: </label>
                    <select name="estado" id="estado">
                        <option value="">Feliz</option>
                        <option value="">Em rolo</option>
                        <option value="">Triste</option>
                    </select>
                    <br>
                    <br>

                    <!--Endereço-->
                    <label id="text" for="endereco">Endereço: </label>
                    <textarea name="endereco" maxlength="150" id="endereco"></textarea>
                    <br>
                    <br>

                    <!--Habilidades-->
                    <p>Habilidades:</p>
                    <label id="text" for="habilidades">HTML</label>
                    <input type="radio" name="habilidades" id="html">
                    <br>
                    <label id="text" for="habilidades">CSS</label>
                    <input type="radio" name="habilidades" id="css">
                    <br>
                    <label id="text" for="habilidades">JavaScript</label>
                    <input type="radio" name="habilidades" id="js">
                    <br>
                    <label id="text" for="habilidades">Office</label>
                    <input type="radio" name="habilidades" id="office">
                    <br>
                    <br>

                    <!--Botão Cadastrar-->
                    <button id="btn">Cadastrar</button>
                            </form>
                            </fieldset>

                            <?php
                            if($_POST){
                            echo 'Nome: ', $_POST['nome'] ,'</span><br>';
                            echo 'Data de nascimento: ', $_POST['dtn'], '<br>';
                            echo 'Email: ', $_POST['email'],'<br>';
                            echo 'Cor: ', $_POST['cor'],'<br>';
                            echo 'Dependentes: ', $_POST['dependentes'],'<br>';
                            echo 'Estado: ', $_POST['estado'],'<br>';
                            echo 'Endereço: ', $_POST['endereco'],'<br>';
                            echo 'Habilidades: ', $_POST['habilidades'],'<br>';
                            }
                        ?>