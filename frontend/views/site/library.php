 <?php
 $this->title = 'Авторы и их книги';
 $this->params['breadcrumbs'][] = $this->title;
foreach ($model1 as $row){

    echo '<h4 class="p-3 mb-2 bg-info text-white">'. $row->name . '</h4>';
    foreach ($row->books as $book){
        echo '<h5>'. $book->name . '</h5>';
        $count=0;


    }

}

