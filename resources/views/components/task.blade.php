<div class="item">
    <div class="item-content">
        <div class="title">
            <input type="checkbox" name="" id="">
            <h3>{{$data['task_title' ??  '']}}</h3>
        </div>
        <div class="priority">
            <div class="sphere"></div>
            <h4>
                {{$data['categories']->categorie_title ?? 'Sem Categoria'}}
            </h4>
        </div>
        <div class="actions">
            <a href="{{route('edit-task',[$data['id']])}}">
                <img src="assets/images/icon-edit.png" alt="">
            </a>
            <a href="{{route('delete-task',[$data['id']])}}">
                <img src="assets/images/icon-delete.png" alt="">
            </a>
        </div>
    </div>
</div>
