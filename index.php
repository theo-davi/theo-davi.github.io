<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #grupo{
            color: #ffc107;
            animation-name: piscar;
            animation-duration: 5s;
            font-size: 160px;
        }
        @keyframes piscar{
            0%{
                color: black;
            }
            20%{
                color: yellow;
            }
            40%{
                color: black;
            }
            60%{
                color: yellow;
            }
            80%{
                color: black;
            }
            100%{
                color: yellow;
            }
        }
        #fundo{
            background-color: #0d6efd;
            animation-name: piscar_fundo;
            animation-duration: 5s;
        }
        @keyframes piscar_fundo{
            0%{
                background-color: #0d6efd;
            }
            20%{
                background-color: black;
            }
            40%{
                background-color: #0d6efd;
            }
            60%{
                background-color: black;
            }
            80%{
                background-color: #0d6efd;
            }
            100%{
                background-color: black;
            }
        }
        .destaque{
            font-size: 60px;
        }
        .grupos{
            font-size: 40px;
        }
        #grupos_chamados, #grupos_restantes{
            font-size: 30px;
        }
    </style>
</head>
<body id="fundo" class="h-100 p-5 d-flex flex-column justify-content-center align-items-center gap-3">
    <p class="text-white destaque fw-bold">Grupo</p>
    <p class="fw-bold" id="grupo"></p>
    <p class="text-white destaque fw-bold">Sala C-2</p>
    <div>
        <div class="d-flex flex-column align-items-center">
            <p class="grupos text-white fw-bold">Grupos já chamados:</p>
            <p class="text-white" id="grupos_chamados"></p>
        </div>
        <div class="d-flex flex-column align-items-center">
            <p class="grupos text-white fw-bold">Grupos restantes:</p>
            <p class="text-white" id="grupos_restantes"></p>
        </div>
    </div>
    <button class="fs-3 btn btn-warning" id="botao" onclick="mostrar()">Próximo</button>
    <audio id="audio" src="audio.mp3"></audio>
    <script>
        var grupos = ['Matematês', 'Lovelace', 'MECK', 'Onda Verde', 'SUAP Mobile', 'Pharus', 'Amparo', 'Conecta', 'DoandoAlegria', "Federal's Indie", 'Splan'];
        var grupos_chamados = [];
        document.getElementById('grupo').innerHTML=grupos[0];
        function mostrar(){
            grupos_chamados.push(grupos.shift())
            document.getElementById('grupos_chamados').innerHTML=grupos_chamados;
            document.getElementById('grupo').innerHTML=grupos[0]
            document.getElementById('grupos_restantes').innerHTML=grupos.slice(1);
            document.getElementById('grupo').style.animation='none';
            document.getElementById('grupo').offsetHeight;
            document.getElementById('grupo').style.animation='';
            document.getElementById('fundo').style.animation='none';
            document.getElementById('fundo').offsetHeight;
            document.getElementById('fundo').style.animation='';
            document.getElementById('audio').play();
        }
    </script>
    <?php
        echo "<h1>TESTE</h1>";
    ?>
</body>
</html>