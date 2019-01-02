{{$page}}
@foreach($list as $v)
    {{$v['user_name']}}.{{$v['phone']}}.{{$v['email']}}<br/>
    @endforeach