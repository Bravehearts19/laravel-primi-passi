<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Laravel Primi Passi</title>

        {{-- STILI CSS DA APPLICARE ALLA PAGINA --}}
        <style>
            h1 {
                color: red;
            }

            strong {
                color: blueviolet;
            }

            a {
                color: green;
            }

            li {
                padding: 20px 0;
            }

            ul {
                list-style: none;
            }
            
            header {
                text-align: center;
            }

            main {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Hello World!</h1>
            <h3>I'm <strong>{{ $name }} {{ $surname }}</strong></h3>
        </header>
        <main>
            <ul>
                @foreach($links_list as $link)
                    <li>
                        <a href="{{ route($link["link"]) }}">{{ $link["text"] }}</a>
                    </li>
                @endforeach
            </ul>
        </main>
        <footer></footer>
    </body>
</html>