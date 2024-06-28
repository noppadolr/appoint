<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    doctor dashboard

    <form method="post" action="{{route('logout')}}">
        @csrf
        <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault();
                                this.closest('form').submit();" >
            <i class="fe-log-out"></i>
            <span>Logout</span>
        </a>
    </form>
</body>
</html>