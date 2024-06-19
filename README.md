# Microframework MVC

Um microframework MVC simples para aplicações web, desenvolvido em PHP.

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Estrutura de Diretórios](#estrutura-de-diretórios)
- [Instalação](#instalacao)
- [Uso](#uso)
- [Contribuindo](#contribuindo)
- [Licença](#licenca)

## Sobre o Projeto

Este projeto é um microframework MVC (Model-View-Controller) simples, ideal para iniciantes que querem aprender sobre a arquitetura MVC em aplicações web usando PHP.

**Nota:** O projeto ainda está em desenvolvimento. Algumas partes, como o model, ainda não estão completas.

## Estrutura de Diretórios

A estrutura do projeto é organizada da seguinte forma:

    <ul>
        <li>Microframework-MVC/
            <ul>
                <li>app/
                    <ul>
                        <li>controllers/
                            <ul>
                                <li>HomeController.php</li>
                                <li>_404Controller.php</li>
                            </ul>
                        </li>
                        <li>core/
                            <ul>
                                <li>App.php</li>
                                <li>Controller.php</li>
                                <li>Database.php</li>
                                <li>Model.php</li>
                                <li>config.php</li>
                                <li>functions.php</li>
                                <li>init.php</li>
                            </ul>
                        </li>
                        <li>views/
                            <ul>
                                <li>home.view.php</li>
                                <li>404.view.php</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>public/
                    <ul>
                        <li>assets/
                            <ul>
                                <li>imgs/</li>
                                <li>styles/
                                    <ul>
                                        <li>system-styles/
                                            <ul>
                                                <li>home-controller.css</li>
                                                <li>not-found.css</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>js/</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>


- `app/controllers/`: Contém os controladores do projeto.
- `app/core/`: Contém as classes principais do framework, como a classe `App` que gerencia a aplicação.
- `app/models/`: Local onde serão adicionados os modelos (em desenvolvimento).
- `public/`: Contém os arquivos públicos acessíveis via URL, incluindo CSS, JavaScript e o ponto de entrada `index.php`.
- `views/`: Contém as views da aplicação.

## Instalação

Para instalar o projeto, siga os passos abaixo:

1. Clone o repositório:
    ```
    git clone https://github.com/gabrielrez/Microframework-MVC.git
    ```

2. Navegue até o diretório do projeto:
    ```
    cd Microframework-MVC
    ```

3. Configure seu servidor web (Apache, Nginx, etc.) para apontar para o diretório `public`.

## Uso

Para iniciar o servidor de desenvolvimento integrado do PHP, execute o seguinte comando no terminal dentro do diretório `public`:

```sh
php -S localhost:8000
