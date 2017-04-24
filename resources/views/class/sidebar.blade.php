<div class="sidebar">
    <div class="infobox"  style="text-align: center">
        <h6 class="username">{{$class->className}}</h6>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4 col-xs-12">

            <a href="{{url('class')}}">
                <p class="p-infonum">{{$class->Journals->count()}}</p>
                动态
            </a>

        </div>
        <div class="col-md-4 col-xs-12">
            <a href="{{url('class/members')}}">
                <p class="p-infonum">{{$class->members->count()}}</p>
                成员
            </a>
        </div>
        <div class="col-md-4 col-xs-12">
            <a href="#">
                <p class="p-infonum">100</p>
                文件
            </a>
        </div>
    </div>
</div>