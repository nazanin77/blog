<div class="card text-right mx-1" style="width: 17rem;">
    <div class="card-body ">
        <h5 class="card-title ">{{jdate($khatere->created_at)}}</h5>
        <h4 class="card-title ">{{$khatere->title}}</h4>
        <a href="{{route("show",$khatere->id)}}" class="btn btn-outline-dark">نمایش</a>
        <a href="{{route("edit",$khatere->id)}}" class="btn btn-outline-dark">ویرایش</a>
        <a href="{{route("delete",$khatere->id)}}" class="btn btn-outline-dark">حذف</a>
    </div>
</div>
