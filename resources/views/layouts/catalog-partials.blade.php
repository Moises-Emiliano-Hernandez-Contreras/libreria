<div class="list-group-item">
    @php
        $linkImage="/storage/".$book->image_name;
        $title=$book->title;
        $infoLibro='book-info/'.$book->id;
    @endphp
    <div class="row-picture">        
        <img class="circle" src={{$linkImage}} alt="icon">
    </div>
    <div class="row-content">
        <h4 class="list-group-item-heading">{{$title}}</h4>
        <p class="list-group-item-text">
            <strong>Autor: </strong>{{$book->author}} <br>
            <a href={{$infoLibro}} class="btn btn-primary" title="Más información"><i class="zmdi zmdi-info"></i></a>
            <a target="_blank" href="{{asset('/storage/'.$book->pdf_name)}}" class="btn btn-primary" title="Ver PDF"><i class="zmdi zmdi-file"></i></a>
            <a href={{"/downloadBook/0".$book->id}} class="btn btn-primary" title="Descargar PDF"><i class="zmdi zmdi-cloud-download"></i></a>
            <a href={{"book-config/".$book->id}} class="btn btn-primary" title="Gestionar libro"><i class="zmdi zmdi-wrench"></i></a>
        </p>
    </div>
</div>						
<div class="list-group-separator"></div>