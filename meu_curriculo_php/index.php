<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php
        $nomeCompleto = "Lana Liz Lima Torres"; // Substitua pelo seu nome
        $idade = 20; // Substitua pela sua idade
        $fotoPerfil = "imagens/minha_imagem.jpg"; // Caminho para sua foto
    ?>
    <div class="perfil">
        <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
        <h1><?php echo $nomeCompleto; ?></h1>
        <p>Idade: <?php echo $idade; ?> anos</p>
    </div>
    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
            $experiencias = [
                [
                    "empresa" => "Instituto Federal de Educação, Ciência e Tecnologia do Ceará | Campus Cedro",
                    "cargo" => "Bolsista do projeto Enade IFCE",
                    "periodo" => "2024 – 2024",
                    "descricao" => "Atuação no cadastro e revisão de questões no Sistema Questione,
                     incluindo inserção de texto base, enunciado e alternativas com indicação da resposta correta. 
                     Responsável pela atribuição de conteúdos conforme a matriz de referência do ENADE e validação final das 
                     questões, garantindo formatação adequada e conformidade com os critérios estabelecidos.
                     Aprendizados: Desenvolvimento de atenção aos detalhes, organização, interpretação de textos, 
                     alinhamento a critérios técnicos e normativos, além de aprimoramento em redação e revisão de conteúdo educacional."
                ],
                // Adicione mais experiências conforme necessário
            ];
        ?>

        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Sem experiência profissional para mostrar.</p>
            <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php
            $cursos = [
                [
                    "nome" => "Bacharelado em Sistemas de Informação",
                    "instituicao" => "Instituto Federal de Educação, Ciência e Tecnologia do Ceará | Campus Cedro",
                    "periodo" => "2023 – 2027"
                ],

                [
                    "nome" => "Técnico em Informática",
                    "instituicao" => "Instituto Federal de Educação, Ciência e Tecnologia do Ceará | Campus Cedro",
                    "periodo" => "2019 – 2022"
                ],
                
            ];
         ?>

        <?php if (!empty($cursos)): ?>
            <ul>
            <?php foreach ($cursos as $curso): ?>
                <li>
                    <h3><?php echo $curso['nome']; ?></h3>
                    <h4><?php echo $curso['instituicao']; ?></h4>
                    <p class="periodo"><?php echo $curso['periodo']; ?></p>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>

                
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
            $habilidades = [
                "PHP" => 8, // Avalie sua habilidade de 0 a 10
                "HTML" => 10,
                "CSS" => 10,
                "JavaScript" => 5,
                "Banco de Dados" => 9
            ];

            $hobbies = [
                "Estudar" => 10, // Avalie seu nível de interesse de 0 a 10
                "Ler" => 7,
                "Academia/musculação" => 10
            ];
        ?>

        <h3>Habilidades</h3>
            <?php if (!empty($habilidades)): ?>
                <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="habilidade"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <?php echo $nivel; ?>/10
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        <h3>Hobbies</h3>
            <?php if (!empty($hobbies)): ?>
                <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        (<?php echo $interesse; ?>/10)
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>

    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> Seu Nome</p>
    </footer>
</body>
</html>
