<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="content ">
            <nav>
                <a href="{{route('new-task')}}">
                    <div class="btn">Criar Tarefa</div>
                </a>
            </nav>

            <div class="main">
                <div class="graph">
                    <div class="graph_header">
                        <div class="title">Progresso do Dia</div>
                        <div class="border"></div>
                        <div class="data">
                            <img src="assets/images/icon-prev.png" alt="">
                            13 de Dez
                            <img src="assets/images/icon-next.png" alt="">
                        </div>
                    </div>
                    <div class="subtitle">Tarefas <b> 3/6</b></div>

                    <div class="graph-father">
                        <div class="graph-placeholder"></div>
                        <div class="task-left">
                            <img src="assets/images/icon-info.png" alt="">
                            <p>Restam 3 tarefas para serem finalizdas</p>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="list_header">
                        <div class="list_header_select">
                            <select class="select">
                                <option value="1">Todas as Tarefas</option>
                            </select>
                            <div class="tesk-list">
                                @foreach($task as $tasks)
                              <x-task :data=$tasks>

                              </x-task>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>





</body>
</html>
