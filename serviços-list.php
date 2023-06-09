<div id="content">
    <div class="sidebar" id="center">
        <nav id="menu-content">
            <button id="botao1" class="menu-button active" data-target="content1">Lista de Serviços</button>
            <div class="pesquisa2">
                <form action="busca/busca-servico.php">
                    <input name="nome_pagina" type="text" placeholder="buscar...">
                    <i class="fa fa-search"></i>
                    <button style="display: none;"></button>
                </form>
            </div>
            <button id="botao2" class="menu-button" data-target="content2">Mapa</button>
            <div class="btn-dropdown">
                <button class="main-btn-a">Filtrar busca</button>
                <div class="btn-dropdown-child">
                    <nav>
                        <button id="botao3" class="menu-button" data-target="content3">Status</button>
                        <button id="botao4" class="menu-button" data-target="content4">Local</button>
                        <button id="botao5" class="menu-button" data-target="content5">Preço</button>
                        <button id="botao6" class="menu-button" data-target="content6">Data</button>
                        <button id="botao7" class="menu-button" data-target="content7">Serviço</button>
                        <button id="botao8" class="menu-button" data-target="content8">Especialidade</button>
                    </nav>
                </div>
            </div>
        </nav>
        <div class="container-content" id="content-box">
            <div id="conteudo">
                <div class="content active" id="conteudo1">
                    <h2>Lista de Serviços:</h2>
                    <p>Aqui serão mostrados os serviços para cada especialidade.</p>
                    <p>Nesta página serão exibidos os serviços de Cabeleireiro</p>
                </div>
                <div class="content hidden" id="conteudo2">
                    <h2>Mapa:</h2>
                    <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                        mas sim botões que abrem conteúdo no espaço abaixo</p>
                </div>
                <div class="content hidden" id="conteudo3">
                    <h2>Por Status:</h2>
                    <p>Disponível, Pendente ou Cancelado</p>
                </div>
                <div class="content hidden" id="conteudo4">
                    <h2>Por Local:</h2>
                    <p>Pode-se selecionar o endereço e aparecerá apenas os que estão neste lugar.</p>
                </div>

                <div class="content hidden" id="conteudo5">
                    <h2>Por Preço:</h2>
                    <p>Selecionar faixa de preço em que está disposto a pagar.</p>
                </div>
                <div class="content hidden" id="conteudo6">
                    <h2>Por Data:</h2>
                    <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                        mas sim botões que abrem conteúdo no espaço abaixo.</p>
                </div>
                <div class="content hidden" id="conteudo7">
                    <h2>Por Serviço:</h2>
                    <p>Aparecerão apenas os que estiverem categorizados com o serviço selecionado.</p>
                </div>
                <div class="content hidden" id="conteudo8">
                    <h2>Por Especialidade:</h2>
                    <p>Aparecerão apenas os serviços que estiverem categorizados com a especialidade selecionada.</p>
                </div>
            </div>
        </div>
    </div>
</div>