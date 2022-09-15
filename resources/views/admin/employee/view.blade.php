<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="">
        <h3>{{$employee->name}}</h3>


        <ul>
            @foreach ($employee_skills as $employee_skill)
                @if ($employee->id == $employee_skill->employee_id)
                    @foreach ($skills as $skill)
                        @if ($skill->id == $employee_skill->skill_id)
                            <li>{{$skill->name}}</li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
</body>
</html>
